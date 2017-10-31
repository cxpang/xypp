<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roomname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roomimage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roomprice')->textInput() ?>

    <?= $form->field($model, 'roomaddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roomstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <?= $form->field($model, 'createtime')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
