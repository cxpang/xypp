<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Star */

$this->title = '更新追星剧场: ' . $model->startname;
$this->params['breadcrumbs'][] = ['label' => '追星剧场', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->startname, 'url' => ['view', 'id' => $model->starid]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="star-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
