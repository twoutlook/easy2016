<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DirPrj */

$this->title = 'Update Dir Prj: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dir Prjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir-prj-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
