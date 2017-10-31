<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\XUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xuser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Xuser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'password',
            'sex',
            'address',
            // 'email:email',
            // 'upicture',
            // 'uphone',
            // 'status',
            // 'auth_key',
            // 'password_reset_token',
            // 'time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
