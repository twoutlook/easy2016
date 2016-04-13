<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dir101 */

$this->title = 'Create Dir101';
$this->params['breadcrumbs'][] = ['label' => 'Dir101s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir101-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
