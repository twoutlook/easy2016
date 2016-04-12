<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Crm001 */

$this->title = $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Crm001s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crm001-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            'category',
            'item',
            'item2',
            'cust01',
            'cust02',
            'cust03',
        ],
    ]) ?>

</div>
