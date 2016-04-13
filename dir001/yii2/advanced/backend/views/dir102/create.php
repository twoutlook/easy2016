<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dir102 */

$this->title = 'Create Dir102';
$this->params['breadcrumbs'][] = ['label' => 'Dir102s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir102-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
