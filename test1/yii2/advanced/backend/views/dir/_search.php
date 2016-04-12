<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DirSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dept_name') ?>

    <?= $form->field($model, 'job_title') ?>

    <?= $form->field($model, 'empe_name') ?>

    <?= $form->field($model, 'ext_num') ?>

    <?php // echo $form->field($model, 'cell_num') ?>

    <?php // echo $form->field($model, 'mailbox') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
