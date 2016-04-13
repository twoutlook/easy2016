<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dir101 */

$this->title = 'Update Dir101: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dir101s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir101-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
