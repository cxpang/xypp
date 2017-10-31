<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RoomcontentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roomcontents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomcontent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Roomcontent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'roomcontentid',
            'contenttext',
            'uid',
            'roomid',
            'createtime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
