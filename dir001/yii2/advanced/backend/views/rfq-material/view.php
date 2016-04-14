<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RfqMaterial */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '材料規格', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rfq-material-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('刪除', ['delete', 'id' => $model->id], [
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
//           'id',
            'material',
            'price1',
            'price2',
            'seq',
        ],
    ]) ?>

</div>
