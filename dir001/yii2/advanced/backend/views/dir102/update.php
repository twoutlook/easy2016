<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dir102 */

$this->title = 'Update Dir102: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dir102s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir102-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
