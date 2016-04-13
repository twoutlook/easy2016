<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dir202 */

$this->title = 'Create Dir202';
$this->params['breadcrumbs'][] = ['label' => 'Dir202s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir202-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
