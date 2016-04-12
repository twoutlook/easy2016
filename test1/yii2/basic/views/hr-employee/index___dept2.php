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
$objPHPExcel = \PHPExcel_IOFactory::load('./dept2.xls');//Z1410017.xls
// $objPHPExcel = \PHPExcel_IOFactory::load('./dept1.xlsx');
// $objPHPExcel->setActiveSheetIndex(0)

  // $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
  // print_r($sheetData);
 $sheet_count = $objPHPExcel->getSheetCount();
 echo "sheet count is ".$sheet_count."<br><br>";
  for ( $i=0;$i<$sheet_count;$i++){
    $sheetData = $objPHPExcel->setActiveSheetIndex($i)->toArray(null, true, true, true);
    // print_r($sheetData);

    $name=$sheetData[5]["D"];
      $id=$sheetData[5]["I"];
    $start_date=$sheetData[5]["M"];
    $dept=$sheetData[6]["D"];
    $position=$sheetData[6]["I"];
    $education=$sheetData[6]["M"];
// INSERT INTO `employee` (`id`, `employee_id`, `employee_name`, `start_date`, `department`, `position`, `education`) VALUES
// (NULL, 'aaa', 'bbb', '2016-04-03', 'xxx', 'zzz', 'aaa');
    $SQL=" INSERT INTO `employee` (`id`, `employee_id`, `employee_name`, `start_date`, `department`, `position`, `education`) VALUES ";
    $SQL.=" (NULL, '$id', '$name', '$start_date', '$dept', '$position', '$education');";
    echo $SQL;
    // echo $id.' '.$name.' '.$start_date.' '.$dept.' '.$position.' '.$education;
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
<?php Pjax::begin(); ?>    <?= GridView::widget([
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
    ]); ?>
<?php Pjax::end(); ?></div>
