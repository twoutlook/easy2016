<?php

use yii\helpers\Html;
use yii\grid\GridView;

//use app\models\Book1002;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Book1001s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book1001-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book1001', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'author_id',
           'author.firstname',//&#23621;&#28982;&#26159;&#36889;&#27171;,&#20173;&#28982;&#21483;author
          

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
