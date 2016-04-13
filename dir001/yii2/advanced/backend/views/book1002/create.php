<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Book1002 */

$this->title = 'Create Book1002';
$this->params['breadcrumbs'][] = ['label' => 'Book1002s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book1002-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
