<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use janisto\timepicker\TimePicker;
$this->title = '健身空间';
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ul class="breadcrumb">
                <li>
                    <a href="<?=Url::to(['site/index']) ?>">首页</a>
                </li>
                <li class="active">
                    健身空间
                </li>
            </ul>
        </div>
        <div class="col-md-12 column">
            <h3 class="text-center">
                拥有漂亮的人鱼线
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
                        <img alt="" src="images/jianshenkongjian1.jpg" style="width: 1600px;height: 500px;" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="images/jianshenkongjian2.jpg" style="width: 1600px;height: 500px;" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item active">
                        <img alt="" src="images/jianshenkongjian3.jpg" style="width: 1600px;height: 500px;" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div> <a class="left carousel-control" href="#carousel-80759" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-80759" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>




        </div>
        <div class="col-md-12" style="border: 1px solid #e4e6eb;margin-top: 20px">
            <?php $form = ActiveForm::begin(['method' => "get",'action'=>Url::to(['compet/index']),'options' => ['style' => 'margin-top: 10px;margin-bottom:10px;'] ]); ?>
            <div class="col-md-3">
                <input type="text" class="form-control"  name="competname" value="<?=Yii::$app->request->get('competname')?>" placeholder="旅行关键词">
            </div>

            <div class="col-md-2">
                <select class="form-control" name="status">
                    <option>全部</option>
                    <option>求健身</option>
                    <option>已结帖</option>
                </select>
            </div>

            <input type="submit" name="search_submit" value="过滤" class="btn">
            <?php $form = ActiveForm::end(); ?>
            <button class="btn btn-primary btn-lg" style="float: right;margin-bottom: 10px;" onclick="showaddcompet();">
                我要发布
            </button>


        </div>
        <div   id="addcompet" style="display: none; width: 500px;margin: 0 auto; ">
            <form action="<?=Url::to(['compet/create'])?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input name="_csrf-frontend" type="hidden" id="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>">
                    健身空间主题:<input type="text" name="competname" required class="form-control">
                    健身空间时间:<?=TimePicker::widget([
                        'name'=>'compettime',
                        'language'=>'zh-CN',
                        'size'=>'ms',
                        'clientOptions'=>[
                            'dateFormat' => 'yy-mm-dd',
                            'timeFormat' => 'HH:mm:ss',
                            'todaybtn'=>true,
                            'autoclose'=>true,
                        ]
                    ])?>
                    健身空间内容:<textarea name="competcontent" required class="form-control" style="height: 300px" placeholder="最多200字符"></textarea>
                    健身空间照片:<input type="file" name="competimage" required class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="clearaddcompet();"
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
                    <h1 style="margin-left: 60px"><a style="text-decoration: none" href="<?=Url::to(['compet/detail','competid'=>$row['competid']])?>" ><?php echo $row['competname'] ?></a>
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
                        <?=Html::img($row['competimage'],['alt' => '缩略图','width' => 200,'height'=>200])?>
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
    function showaddcompet() {
        $("#addcompet").show();
    }
    function clearaddcompet() {
        $("#addcompet").hide();
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
