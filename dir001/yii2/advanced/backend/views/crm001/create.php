<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Crm001 */

$this->title = 'Create Crm001';
$this->params['breadcrumbs'][] = ['label' => 'Crm001s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crm001-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
