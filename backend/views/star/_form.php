<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Star */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="star-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'startname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'startcontent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'startimage')->fileInput()?>

    <?= $form->field($model, 'starttime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'starprice')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>


    <?= $form->field($model, 'status')->dropDownList(['追星求友中'=>'追星求友中','已结帖'=>'已结帖'],
        ['prompt']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
