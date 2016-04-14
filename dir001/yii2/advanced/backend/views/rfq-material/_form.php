<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RfqMaterial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rfq-material-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price1')->textInput() ?>

    <?= $form->field($model, 'price2')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
