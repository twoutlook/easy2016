<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dir202 */

$this->title = 'Update Dir202: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dir202s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir202-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
