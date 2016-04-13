<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dir100 */

$this->title = 'Create Dir100';
$this->params['breadcrumbs'][] = ['label' => 'Dir100s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir100-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
