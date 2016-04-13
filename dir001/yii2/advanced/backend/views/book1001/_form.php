<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Book1002;

/* @var $this yii\web\View */
/* @var $model app\models\Book1001 */
/* @var $model app\models\Book1002 */

/* @var $form yii\widgets\ActiveForm */
?>

<div class="book1001-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
  	echo $form->field($model, 'author_id')->textInput();
 
	echo $form->field($model, 'author_id')->dropDownList(\yii\helpers\ArrayHelper::map(Book1002::find()->select(['id', 'firstname', 'lastname'])->all(), 'id', 'firstname'), ['class' => 'form-control inline-block']);
  
  	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
