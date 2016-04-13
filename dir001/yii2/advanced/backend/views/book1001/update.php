<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Book1001 */

$this->title = 'Update Book1001: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Book1001s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book1001-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
