<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DirPrj */

$this->title = 'Create Dir Prj';
$this->params['breadcrumbs'][] = ['label' => 'Dir Prjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-prj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
