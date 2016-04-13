<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DirBase */

$this->title = 'Create Dir Base';
$this->params['breadcrumbs'][] = ['label' => 'Dir Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-base-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
