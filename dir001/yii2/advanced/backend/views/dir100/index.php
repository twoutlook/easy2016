<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dir100s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir100-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('新增通信錄', ['create'], ['class' => 'btn btn-success']) ?>
                   <a class="btn  btn-warning" href="../web/index.php?r=dir101%2Findex">維護部門信息</a>
                   <a class="btn  btn-warning" href="../web/index.php?r=dir1012%2Findex">維護項目信息</a>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
  //          'dept_id',
//            'dir101.dept_name',
          'dept.dept_name',
    //        'prj_id',
            'prj.prj_name',
            'job_title',
            'empe_name',
             'ext_num',
             'cell_num',
             'mailbox',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
