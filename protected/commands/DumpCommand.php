<?php

class DumpCommand extends  CConsoleCommand
{
    public function actionIndex() {
        Yii::import('ext.yiiexcel.YiiExcel', true);
        Yii::registerAutoloader(array('YiiExcel', 'autoload'), true);
    echo "run dump\n" ; 

    $root =  dirname(dirname(dirname(__FILE__)));
    $ts = (int)(time() / 1000);
    $filePath = $root . "/download/{$ts}.xlsx";
    if (file_exists($filePath)) {
        echo ("Location: /download/{$ts}.xlsx");
        echo ("Cache: hit");
        exit();
    }

    $model=new Jmuser('search');
    $model->unsetAttributes();  // clear any default values
    $model->attributes=array();
	$data = $model->search();
    $data->setPagination (false);
    $objPHPExcel = new PHPExcel();
    $row = 1;

    foreach (Jmuser::fields() as $col => $field) {
        $labels = $model->attributeLabels();
        $name = isset( $labels[$field] ) ? $labels[$field] : $field;
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col , $row, $name);
    }
    //var_dump($cnt, $data->getItemCount(),  $data->getTotalItemCount());
    $users = $data->getData( array("order" => "sysID"));
    foreach ($users as $key => $user)
    {
        echo  "{$row}/" . count($users) . " " . $user->oa . "\n";
        $row += 1;
        foreach (Jmuser::fields() as $col => $field) {
            $val = $user->$field;
            $cell = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($col, $row);
            $cell->setValueExplicit($val, PHPExcel_Cell_DataType::TYPE_STRING);
        }
    }
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    
    $objWriter->save($filePath);
    echo ("Location: /downloads/{$ts}.xlsx");

    }

}
