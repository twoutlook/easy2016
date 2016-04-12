<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Crm001s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crm001-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php// echo Html::a('Create Crm001', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'code',
            'category',
            'item',
            'item2',
            'cust01',
             'cust02',
             'cust03',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
