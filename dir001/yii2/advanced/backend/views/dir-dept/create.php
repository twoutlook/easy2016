<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DirDept */

$this->title = 'Create Dir Dept';
$this->params['breadcrumbs'][] = ['label' => 'Dir Depts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-dept-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
