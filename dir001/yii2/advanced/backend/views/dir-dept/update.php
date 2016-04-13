<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DirDept */

$this->title = 'Update Dir Dept: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dir Depts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir-dept-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
