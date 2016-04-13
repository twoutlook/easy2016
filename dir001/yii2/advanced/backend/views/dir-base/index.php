<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dir Bases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-base-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dir Base', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'dept_id',
            'dirDept.deptName',
//            'dir_dept.deptName', //FAILED
            
            //  'author.displayName', //TRY 4 , OK!!!
            
            'prj_id',
            'job_title',
            'empe_name',
             'ext_num',
             'cell_num',
             'mailbox',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
