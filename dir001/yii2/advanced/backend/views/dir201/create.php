<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dir201 */

$this->title = 'Create Dir201';
$this->params['breadcrumbs'][] = ['label' => 'Dir201s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir201-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
