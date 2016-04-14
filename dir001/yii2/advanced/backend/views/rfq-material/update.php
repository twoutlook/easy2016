<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RfqMaterial */

$this->title = '修改: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '材料規格', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="rfq-material-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
