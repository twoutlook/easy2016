<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Crm001 */

$this->title = 'Update Crm001: ' . $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Crm001s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->code, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';


$userId = Yii::$app->user->getId();
//$userId=Yii::$app->user->getId();
//echo "user id is $userId"
if (!($userId == 6 )) { // 6: david
    echo "<h2>您必需以 david 登入!  </h2>";
    return;
}
?>
<div class="crm001-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
