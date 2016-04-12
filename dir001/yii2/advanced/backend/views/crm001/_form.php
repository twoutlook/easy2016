<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Crm001 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crm001-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cust01')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cust02')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cust03')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
