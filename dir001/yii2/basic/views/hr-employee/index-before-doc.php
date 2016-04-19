<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">
    <?php
// $objPHPExcel = \PHPExcel_IOFactory::load('./Z1410017.xls');//Z1410017.xls
    $objPHPExcel = \PHPExcel_IOFactory::load('./office-dir.xlsx'); //Z1410017.xls
// $objPHPExcel = \PHPExcel_IOFactory::load('./dept1.xlsx');
// $objPHPExcel->setActiveSheetIndex(0)
    // $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
    // print_r($sheetData);
    $sheet_count = $objPHPExcel->getSheetCount();
    echo "<h1>office dir</h1>";

    echo "sheet count is " . $sheet_count . "<br><br>";

    function getSQL($aaa, $bbb, $ccc, $ddd, $eee, $fff) {
        //INSERT INTO `dir` (`id`, `dept_name`, `job_title`, `empe_name`, `ext_num`, `cell_num`, `mailbox`)
        //VALUES (NULL, 'aaa', 'bbb', 'ccc', 'ddd', 'eee', 'fff');
        $str = "INSERT INTO `dir` (`id`, `dept_name`, `job_title`, `empe_name`, `ext_num`, `cell_num`, `mailbox`) ";
        $str.="VALUES (NULL, '$aaa', '$bbb', '$ccc', '$ddd', '$eee', '$fff');";
        return $str;
    }

    // for ( $i=0;$i<$sheet_count;$i++){
    for ($i = 0; $i < 1; $i++) {
        $sheetData = $objPHPExcel->setActiveSheetIndex($i)->toArray(null, true, true, true);
        // print_r($sheetData);

        /*
          $name=$sheetData[5]["D"];
          $id=$sheetData[5]["I"];
          $start_date=$sheetData[5]["M"];
          $dept=$sheetData[6]["D"];
          $position=$sheetData[6]["I"];
          $education=$sheetData[6]["M"];

          $SQL=" INSERT INTO `employee` (`id`, `employee_id`, `employee_name`, `start_date`, `department`, `position`, `education`) VALUES ";
          $SQL.=" (NULL, '$id', '$name', '$start_date', '$dept', '$position', '$education');";
          echo $SQL;
         */
        $row_cnt = sizeof($sheetData);
        $row_cnt = 60; // fixed by input
        $dept1 = "...";
        $dept2 = "...";
        $dept3 = "...";
        $cnt = 0;
        for ($row = 1; $row <= $row_cnt; $row++) {
            $colA = $sheetData[$row]["A"];
            $colB = $sheetData[$row]["B"];
            $colC = $sheetData[$row]["C"];
            $colD = $sheetData[$row]["D"];
            $cellular1 = $colE = $sheetData[$row]["E"];
            $colF = $sheetData[$row]["F"];
            if (strlen($colA) > 0) {
                $dept1 = $colA;
            }

            $colI = $sheetData[$row]["I"];
            $colJ = $sheetData[$row]["J"];
            $colK = $sheetData[$row]["K"];
            $colL = $sheetData[$row]["L"];
            $cellular2 = $colM = $sheetData[$row]["M"];
            $colN = $sheetData[$row]["N"];
            if (strlen($colI) > 0) {
                $dept2 = $colI;
            }
            $colO = $sheetData[$row]["O"];
            $colP = $sheetData[$row]["P"];
            $colQ = $sheetData[$row]["Q"];
            $colR = $sheetData[$row]["R"];
            $cellular3 = $colS = $sheetData[$row]["S"];
            $colT = $sheetData[$row]["T"];
            if (strlen($colO) > 0) {
                $dept3 = $colO;
            }

            if (strlen($cellular1) > 0) {
                $cellular1 = (int) $cellular1;
                if ($cellular1 > 0) {
                    $cnt++;
                    //    echo "$cnt $row $dept1 $colB $colC $colD $colE $colF<br>";
                    echo getSQL($dept1, $colB, $colC, $colD, $colE, $colF) . " <br>";
                }
            }
            if (strlen($cellular2) > 0) {
                $cellular2 = (int) $cellular2;
                $colL = (int) $colL;
                if ($colL == 0) {
                    $colL = "";
                }
                if ($cellular2 > 0) {
                    $cnt++;
                    // echo "$cnt $row $dept2  $colJ $colK $colL $colM $colO<br>";
                    // echo getSQL($dept2 ,$colJ, $colK, $colL, $colM ,$colO)." <br>"; // middle set email not show
                    echo getSQL($dept2, $colJ, $colK, $colL, $colM, $colN) . " <br>"; // middle set email not show
                }
            }
            if (strlen($cellular3) > 0) {
                $cellular3 = (int) $cellular3;
                if ($cellular3 > 0) {
                    $cnt++;
                    //   echo "$cnt $row $dept3 $colP $colQ $colR $colS $colT<br>";
                    echo getSQL($dept3, $colP, $colQ, $colR, $colS, $colT) . " <br>";
                }
            }
        }
        echo "<br>";
        //
    }
    $sheetData = $objPHPExcel->setActiveSheetIndex(0)->toArray(null, true, true, true);
    print_r($sheetData);
    echo "<hr>";
    // $sheetData = $objPHPExcel->setActiveSheetIndex(1)->toArray(null, true, true, true);
    // print_r($sheetData);
    // echo "<hr>";
    // $sheetData = $objPHPExcel->setActiveSheetIndex(2)->toArray(null, true, true, true);
    // print_r($sheetData);
    // echo "<hr>";
    ?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'id2',
            'company_id',
            'department_id',
            'job_id',
            'employee_name',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
    <?php Pjax::end(); ?></div>
