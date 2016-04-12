<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dir */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dept_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empe_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ext_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cell_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mailbox')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
