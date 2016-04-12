<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ddl010 */

$this->title = 'Create Ddl010';
$this->params['breadcrumbs'][] = ['label' => 'Ddl010s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ddl010-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
