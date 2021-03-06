<?php

class ImportCommand extends  CConsoleCommand
{
    public function actionIndex($name) {
        Yii::import('ext.yiiexcel.YiiExcel', true);
        Yii::registerAutoloader(array('YiiExcel', 'autoload'), true);
        $root =  (dirname(dirname(__FILE__)));
        //var_dump($root, $name);
        $importFile = $root . "/data/" . $name;
        $objDateTime = new DateTime('NOW'); 
        
        $yes = array(); $no = array(); $cnt=0; $ignore = array();

        $importFields = Jmuser::fields();

        echo 'Import file: ' . $importFile . PHP_EOL;
	    $objPHPExcel =  PHPExcel_IOFactory::load($importFile);
        //$objPHPExcel->setReadDataOnly(TRUE);
        $objWorksheet = $objPHPExcel->getActiveSheet();

        var_dump($importFields);
        foreach ($objWorksheet->getRowIterator() as $row) {
            $cnt += 1;
            if ($cnt <=1 ) continue; // skip table head

            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(FALSE); 
            $nsUser = array();
            
            #var_dump($cellIterator);
            $index = 0;
            foreach ($cellIterator as $cell) {
                if ($index >= count($importFields)) {
                    break;
                }
                $val = $cell->getValue();
                print ($importFields[$index] . ": " . $val);
                if ($importFields[$index]!='id') {
                    if (PHPExcel_Shared_Date::isDateTime($cell)) if (strlen($val) <= 10) {
                        $val = trim($cell->getFormattedValue());
                        $parts = explode("-", $val);
                        if (3==count($parts)) $val = "{$parts[2]}-{$parts[0]}-{$parts[1]}";
                    }
                    
                    $nsUser[$importFields[$index]] = $val;
                }
                $index += 1;
            }

            // var_dump($nsUser);
            echo ($nsUser['oa'] . " {$cnt}\n");
            if (empty($nsUser['oa'])) break;
            $model=Jmuser::model()->findByPk($nsUser['oa']);
            if (!$model) {
                $model = new Jmuser; 
                $model->oa = $nsUser['oa'];
            }
            $changedColumns = array();
            foreach ($model->attributes as $k => $v) {
                if ((!isset($nsUser[$k])) || "" === trim($nsUser[$k])) {
                    file_put_contents("/tmp/continue.log", __FILE__ . ":" .__LINE__ . " " . $k . " skipped\n", FILE_APPEND);
                    continue;
                }
                $v = $nsUser[$k];
                if ($model->$k == $v) {
                    file_put_contents("/tmp/continue.log", __FILE__ . ":" .__LINE__ . " " . $k . " skipped\n", FILE_APPEND);
                    continue;
                }
                $model->$k = $v;
                $changedColumns[] = $k;
            }

            $extra = json_decode($model->extra, true);
            $extraMap = array(
                29 => "clothes",
                30 => "luxian",
                31 => "分团号",
                32 => "出入境领队",
                33 => "游览陪同领队",
                63 => "去程日期",
                64 => "去程航班",
                65 => "去程航班时间",
                66 => "回程日期",
                67 => "回程航班",
                68 => "回程航班时间",
            );
            foreach ($extraMap as $k => $v) {
                $cell = $objWorksheet->getCellByColumnAndRow($k, $row->getRowIndex());
                if (PHPExcel_Shared_Date::isDateTime($cell)) {
                    $extra[$v] = $cell->getFormattedValue();
                } else {
                    $extra[$v] = $cell->getCalculatedValue();
                }
            }
            $model->extra = json_encode($extra);

            $celltw = $objWorksheet->getCellByColumnAndRow(34, $row->getRowIndex());
            $cellhk = $objWorksheet->getCellByColumnAndRow(40, $row->getRowIndex());
            $paper = json_decode($model->paper, true);
            $paper['twpassport'] = $celltw->getCalculatedValue();
            $paper['hkpassport'] = $cellhk->getCalculatedValue();
            $model->paper = json_encode($paper);

            /*if (count($changedColumns) == 0) {
                $ignore[] = $nsUser['oa'];
                continue;
            }*/
	        if ($model->save()) {
                file_put_contents("/tmp/import.log", "NS OK: " . json_encode($nsUser) . "\n", FILE_APPEND);
                $yes[] = $nsUser['oa'];
            } else {
                $no[] = $nsUser['oa'];
                var_dump($model->getErrors());
                file_put_contents("/tmp/import.log", "NS Fail: " . json_encode($nsUser) . "\n", FILE_APPEND);
            }
            echo $model->oa . PHP_EOL;
        }
        echo "<p>导入成功" . count($yes) . ", 失败" . count($no) . ", 忽略(无变更)" . count($ignore) . "</p>";
        echo "<p>导入成功: " . implode(', ', $yes) . "</p>";
        echo "<p>导入失败: " . implode(', ', $no) . "</p>";
        echo "<p>无变更: " . implode(', ', $ignore) . "</p>";

    }

}
