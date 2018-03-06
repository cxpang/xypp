<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->title = '回复中心';
//var_dump($roomresponse);
?>
<div class="container" style="margin-top: 80px">
    <div class="row clearfix">
        <div class="col-md-1 column">
        </div>
        <div class="col-md-10 column">
            <ul class="breadcrumb">
                <li>
                    <a href="<?=Url::to(['site/index'])?>">首页</a>
                </li>
                <li class="active">
                    回复中心
                </li>

            </ul>
            <?php if(!empty($roomresponse)){?>
            <a href="<?=Url::to(['room/detail','roomid'=>$roomresponse[0]['roomid']])?>" style="text-decoration: none">
                <div class="panel panel-primary" style="cursor: pointer">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <img style="width: 50px;height: 50px;border-radius: 50%" src="<?=$roomresponse[0]['upicture']?>"><?=$roomresponse[0]['username']?>
                        :<?=$roomresponse[0]['contenttext']?>
                    </h3>
                </div>
                <div class="panel-body">
                       <img style="width: 50px;height: 50px;border-radius: 50%" src="<?php  echo Yii::$app->user->identity->upicture;?>"><?php echo Yii::$app->user->identity->username; ?>
                       :<?=$roomresponse[0]['roomname']?>
                       <h2>发表于合租空间</h2>

                </div>
                <div class="panel-footer">
                    评论时间:<?=date('Y-m-d H:i:s',$roomresponse[0]['createtime'])?>
                </div>
            </div>
            </a>
            <?php }?>
        </div>
        <div class="col-md-1 column">
        </div>
    </div>
</div>
