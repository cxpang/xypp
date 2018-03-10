<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use janisto\timepicker\TimePicker;
$this->title = '考试有方';
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ul class="breadcrumb">
                <li>
                    <a href="<?=Url::to(['site/index']) ?>">首页</a>
                </li>
                <li class="active">
                    考试有方
                </li>
            </ul>
        </div>
        <div class="col-md-12 column">
            <h3 class="text-center">
                考试不用担心，一起来分享学习技巧
            </h3>
            <div class="carousel slide" id="carousel-80759">
                <ol class="carousel-indicators">
                    <li data-slide-to="0" data-target="#carousel-80759">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-80759">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-80759" class="active">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img alt="" src="images/kaoshiyoufang5.png" style="width: 1600px;height: 500px;" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="images/kaoshiyoufang2.jpg" style="width: 1600px;height: 500px;" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item active">
                        <img alt="" src="images/kaoshiyoufang4.jpg" style="width: 1600px;height: 500px;" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div> <a class="left carousel-control" href="#carousel-80759" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-80759" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>




        </div>
        <div class="col-md-12" style="border: 1px solid #e4e6eb;margin-top: 20px">
            <?php $form = ActiveForm::begin(['method' => "get",'action'=>Url::to(['exam/index']),'options' => ['style' => 'margin-top: 10px;margin-bottom:10px;'] ]); ?>
            <div class="col-md-3">
                <input type="text" class="form-control"  name="examname" value="<?=Yii::$app->request->get('examname')?>" placeholder="旅行关键词">
            </div>

            <div class="col-md-2">
                <select class="form-control" name="status">
                    <option>全部</option>
                    <option>备考中</option>
                    <option>已结帖</option>
                </select>
            </div>

            <input type="submit" name="search_submit" value="过滤" class="btn">
            <?php $form = ActiveForm::end(); ?>
            <button class="btn btn-primary btn-lg" style="float: right;margin-bottom: 10px;" onclick="showaddexam();">
                我要发布
            </button>


        </div>
        <div   id="addexam" style="display: none; width: 500px;margin: 0 auto; ">
            <form action="<?=Url::to(['exam/create'])?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input name="_csrf-frontend" type="hidden" id="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>">
                    考试有方主题:<input type="text" name="examname" required class="form-control">
                    考试有方内容:<textarea name="examcontent" required class="form-control" style="height: 300px" placeholder="最多200字符"></textarea>
                    考试有方照片:<input type="file" name="examimage" required class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="clearaddexam();"
                    >关闭
                    </button>
                    <button type="submit" class="btn btn-primary">
                        提交
                    </button>
                </div>
            </form>
        </div>

        <div class="col-md-12" style="border: 1px solid #e4e6eb;margin-top: 20px;margin-bottom: 200px">
            <?php
            foreach ($data as $row){
                ?>
                <div class="columnroom">
                    <h1 style="margin-left: 60px"><a style="text-decoration: none" href="<?=Url::to(['exam/detail','examid'=>$row['examid']])?>" ><?php echo $row['examname'] ?></a>
                        <span class="span"><?php echo $row['status']?></span>
                        <button type="button" class="btn btn-default btn-lg" style="margin-right: 100px;float: right">
                            <span class="glyphicon glyphicon-user"></span><?php echo  $row['username'];  ?>

                        </button>
                    </h1>
                    <h2 style="margin-left: 20px;margin-top: 20px;color: red">
                        <br />
                        <button type="button" class="btn btn-default btn-lg" style="margin-right: 100px;float: right;    margin-top: 150px;">
                            <span class="glyphicon glyphicon-time"></span> <?php echo date("Y-m-d h:m",$row['createtime']) ?>
                        </button>
                    </h2>
                    <div class="imagesdiv">
                        <?=Html::img($row['examimage'],['alt' => '缩略图','width' => 200,'height'=>200])?>
                    </div>

                </div>
                <!--                    <div class="col-md-7" style="margin-top: 50px;">-->
                <!--                        <h1><a  href="--><?//=Url::to(['room/detail'])?><!--">--><?php // echo $row['roomname'] ?><!--</a></h1>-->
                <!--                        <div class="col-md-6">-->
                <!--                            --><?php // echo $row['roomaddress'] ?>
                <!--                        </div>-->
                <!--                    </div>-->


            <?php }  ?>
        </div>


    </div>

</div>
<script>
    function showaddexam() {
        $("#addexam").show();
    }
    function clearaddexam() {
        $("#addexam").hide();
    }
</script>
<style>
    .columnroom{
        background-color: #ffffff;
        height: 320px;
        border-bottom: 1px solid #e4e6eb ;
    }
    .imagesdiv{
        text-align: center;
    }
    .span{
        margin-left: 50px;
        color: #00CC66;
    }
</style>
