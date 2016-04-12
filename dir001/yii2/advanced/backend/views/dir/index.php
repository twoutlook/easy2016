<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dirs';
$this->params['breadcrumbs'][] = $this->title;

$userId=Yii::$app->user->getId();
//$userId=Yii::$app->user->getId();

//echo "user id is $userId"
if ($userId <> 3 || $userId <> 4){
	
	echo "<h2>You must login to continue!  </h2>";
	return;
}

?>
<div class="dir-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

   
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
            'dept_name',
            'job_title',
            'empe_name',
            'ext_num',
             'cell_num',
             'mailbox',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
