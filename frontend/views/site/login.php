<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="margin-left: 250px;margin-top: 80px">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请完成登录表单:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('用户名') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('密码') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('记住我') ?>

                <div style="color:#999;margin:1em 0">
                    如果您不记得密码 <?= Html::a('找回密码', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
