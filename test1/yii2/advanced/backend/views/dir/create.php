<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dir */

$this->title = 'Create Dir';
$this->params['breadcrumbs'][] = ['label' => 'Dirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
