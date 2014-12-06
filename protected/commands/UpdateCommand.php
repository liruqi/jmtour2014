<?php

class UpdateCommand extends  CConsoleCommand
{
    public function actionUpdate() {
        $objDateTime = new DateTime('NOW'); 
        
        $yes = array(); $no = array(); $cnt=0; $ignore = array();

        $importFields = Jmuser::fields();
        $oas = array(10107480, 10107862, 101017129, 10107599, 1012059, 10107545, 10107202, 10107687, 10107485, 10107890, 10107696, 10107791, 10107794, 10107725, 10107904, 10107607, 10107595, 10107170, 10107475, 10107186, 10107490, 10107795, 10107801, 10107706);
        foreach ($oas as $oa) {
            $nsUser = array();
            
            $model=Jmuser::model()->findByPk($oa);
            if (!$model) {
                $no[] = $oa; continue;
            }

            $extra = json_decode($model->extra, true);
            $extra[ "回程日期" ] = "12/16";
            $extra[ "回程航班" ] = "MU5008";
            $extra[ "回程航班时间" ] = "1500-1640";
            $model->extra = json_encode($extra);

	        if ($model->save()) {
                file_put_contents("/tmp/import.log", "NS OK: " . json_encode($nsUser) . "\n", FILE_APPEND);
                $yes[] = $oa;
            } else {
                $no[] = $oa;
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
