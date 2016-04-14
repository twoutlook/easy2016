<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Dirs';
//$this->params['breadcrumbs'][] = $this->title;


/* @var $this yii\web\View */
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>富鈦金屬企業內部網站</h1>

        <p class="lead">您已登入富鈦金屬企業內部網站，請選擇系統點擊進入</p>

      

        <?php
        $userId = Yii::$app->user->getId();
//$userId=Yii::$app->user->getId();
//echo "user id is $userId"
      
        if (($userId == 3 ||$userId == 4 )) { // 6: david
              echo  '  <p><a class="btn btn-lg btn-success" href="index.php?r=dir%2Findex">富鈦通信錄</a></p>';
        }
        
        
        if (($userId == 6)) { // 6: david
              echo  '<p><a class="btn btn-lg btn-success" href="index.php?r=crm001%2Findex">CRM001</a></p>';
        }
        if (($userId == 7)) { // 7: jason            
              echo '<p><a class="btn btn-lg btn-success" href="index.php?r=rfq-material%2Findex">RFQ 維護下拉基礎數據</a></p>';
        }
        
        
        ?>



    </div>

    <div class="body-content">
    </div>
