<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RfqMaterial */

$this->title = '新增一筆材料規格';
$this->params['breadcrumbs'][] = ['label' => '材料規格', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rfq-material-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
