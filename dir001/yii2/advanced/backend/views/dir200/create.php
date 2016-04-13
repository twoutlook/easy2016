<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dir200 */

$this->title = 'Create Dir200';
$this->params['breadcrumbs'][] = ['label' => 'Dir200s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir200-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
