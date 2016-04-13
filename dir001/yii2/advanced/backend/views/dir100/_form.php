<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Dir101;
use app\models\Dir102;

/* @var $this yii\web\View */
/* @var $model app\models\Dir100 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dir100-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
	//echo $form->field($model, 'dept_id')->textInput() ;
 	echo $form->field($model, 'dept_id')->dropDownList(\yii\helpers\ArrayHelper::map(Dir101::find()->select(['id', 'dept_name'])->all(), 'id', 'dept_name'), ['class' => 'form-control inline-block']);
	?>
  
    <?php
	//$form->field($model, 'prj_id')->textInput();
  	echo $form->field($model, 'prj_id')->dropDownList(\yii\helpers\ArrayHelper::map(Dir102::find()->select(['id', 'prj_name'])->all(), 'id', 'prj_name'), ['class' => 'form-control inline-block']);
	
  	?>

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
