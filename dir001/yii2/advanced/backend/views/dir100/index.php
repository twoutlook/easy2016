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
        <?= Html::a('Create Dir100', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dept_id',
            'dir101.deptName',
            'prj_id',
            'job_title',
            'empe_name',
             'ext_num',
             'cell_num',
             'mailbox',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
