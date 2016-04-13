<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Book1002 */

$this->title = 'Update Book1002: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Book1002s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book1002-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
