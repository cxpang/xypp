<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Roomcontent */

$this->title = 'Update Roomcontent: ' . $model->roomcontentid;
$this->params['breadcrumbs'][] = ['label' => 'Roomcontents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->roomcontentid, 'url' => ['view', 'id' => $model->roomcontentid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="roomcontent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
