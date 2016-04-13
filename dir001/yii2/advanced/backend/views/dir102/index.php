<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dir102s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir102-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dir102', ['create'], ['class' => 'btn btn-success']) ?>
               <a class="btn  btn-warning" href="../web/index.php?r=dir100%2Findex">回到通信錄</a>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'prj_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
