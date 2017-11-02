<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EmotionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '情感空间';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emotion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增情感空间', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'emotionid',
            'emotionname',
//            'emotioncontent:ntext',
            'emotionimage',
            'uid',
            [
                'attribute'=>'发帖人',
                'value'=>'u.username',
            ],
            ['attribute'=>'createtime',
                'format'=>['date','php:Y-m-d H:i:s'],

            ],
            ['attribute'=>'updatetime',
                'format'=>['date','php:Y-m-d H:i:s'],

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
