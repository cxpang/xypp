<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Room */

$this->title = '新增合租';
$this->params['breadcrumbs'][] = ['label' => '合租空间', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
