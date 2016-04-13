<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Author; //2016/4/13 8:49  Class 'Author' not found 

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


    <?php
//    echo $form->field($model, 'author_id')->textInput();
//    echo $form->field($model, 'author_id')->dropDownList(\yii\helpers\ArrayHelper::map(Author::find()->select(['id', 'firstname', 'lastname'])->all(), 'id', 'firstname'), ['class' => 'form-control inline-block']);
    echo $form->field($model, 'author_id')->dropDownList(\yii\helpers\ArrayHelper::map(Author::find()->select(['id', 'firstname', 'lastname'])->all(), 'id', 'displayName'), ['class' => 'form-control inline-block']);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
