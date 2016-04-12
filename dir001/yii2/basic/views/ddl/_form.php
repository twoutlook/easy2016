<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ddl010 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ddl010-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'SEQ')->textInput() ?>

    <?= $form->field($model, 'A')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'B')->textInput() ?>

    <?= $form->field($model, 'C')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
