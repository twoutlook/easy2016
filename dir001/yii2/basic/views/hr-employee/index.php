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
    $objPHPExcel = \PHPExcel_IOFactory::load('./office-dir.xlsx'); // Excel 放在 web 目前，view 和 web 同級。
    $sheet_count = $objPHPExcel->getSheetCount(); // 能查詢這 Excel 檔案有幾張 sheet
    echo "<h1>office dir</h1>";

    echo "sheet count is " . $sheet_count . "<br><br>";

    // 生成單筆 SQL 語句的 function，
    function getSQL($aaa, $bbb, $ccc, $ddd, $eee, $fff) {
        $str = "INSERT INTO `dir` (`id`, `dept_name`, `job_title`, `empe_name`, `ext_num`, `cell_num`, `mailbox`) ";
        $str.="VALUES (NULL, '$aaa', '$bbb', '$ccc', '$ddd', '$eee', '$fff');";
        return $str;
    }

    // 以通信錄而言，就讀取單張 sheet，第一張編號為0
    for ($i = 0; $i < 1; $i++) {
        $sheetData = $objPHPExcel->setActiveSheetIndex($i)->toArray(null, true, true, true);
        // print_r($sheetData); // 開發時快速看到整個內容

        // $row_cnt = sizeof($sheetData); // 沒確定如何找到最大值
        $row_cnt = 60; // fixed by input，先按實況給定
        $dept1 = "...";
        $dept2 = "...";
        $dept3 = "...";
        $cnt = 0;
        
        // loop row，由上而下，同 Excel ，由 1 起算
        for ($row = 1; $row <= $row_cnt; $row++) {
            $colA = $sheetData[$row]["A"];
            $colB = $sheetData[$row]["B"];
            $colC = $sheetData[$row]["C"];
            $colD = $sheetData[$row]["D"];
            $cellular1 = $colE = $sheetData[$row]["E"];
            $colF = $sheetData[$row]["F"];
            
            // 同部門上下合併成單格，值只放在第一格。
            // 如果沒有值，即沿用上一格的值。
            if (strlen($colA) > 0) {
                $dept1 = $colA;
            }
            // 中間組 
            $colI = $sheetData[$row]["I"];
            $colJ = $sheetData[$row]["J"];
            $colK = $sheetData[$row]["K"];
            $colL = $sheetData[$row]["L"];
            $cellular2 = $colM = $sheetData[$row]["M"];
            $colN = $sheetData[$row]["N"];
            if (strlen($colI) > 0) {
                $dept2 = $colI;
            }
            // 右邊組
            $colO = $sheetData[$row]["O"];
            $colP = $sheetData[$row]["P"];
            $colQ = $sheetData[$row]["Q"];
            $colR = $sheetData[$row]["R"];
            $cellular3 = $colS = $sheetData[$row]["S"];
            $colT = $sheetData[$row]["T"];
            if (strlen($colO) > 0) {
                $dept3 = $colO;
            }

            // 左邊組
            if (strlen($cellular1) > 0) {
                $cellular1 = (int) $cellular1;
                if ($cellular1 > 0) {
                    $cnt++;
                    echo getSQL($dept1, $colB, $colC, $colD, $colE, $colF) . " <br>";
                }
            }
            
            // 中間組
            if (strlen($cellular2) > 0) {
                $cellular2 = (int) $cellular2;
                $colL = (int) $colL;
                if ($colL == 0) {
                    $colL = "";
                }
                if ($cellular2 > 0) {
                    $cnt++;
                    echo getSQL($dept2, $colJ, $colK, $colL, $colM, $colN) . " <br>"; // middle set email not show
                }
            }
            
            // 右邊組
            if (strlen($cellular3) > 0) {
                $cellular3 = (int) $cellular3;
                if ($cellular3 > 0) {
                    $cnt++;
                    echo getSQL($dept3, $colP, $colQ, $colR, $colS, $colT) . " <br>";
                }
            }
        }
        echo "<br>";
        //
    }
    
    // 用以參考對照
    $sheetData = $objPHPExcel->setActiveSheetIndex(0)->toArray(null, true, true, true);
    print_r($sheetData);
    echo "<hr>";
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
