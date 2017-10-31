<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\XUser */

$this->title = 'Update Xuser: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Xusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="xuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
