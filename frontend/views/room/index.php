<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = '合租空间';
?>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ul class="breadcrumb">
                <li>
                    <a href="<?=Url::to(['site/index']) ?>">首页</a>
                </li>
                <li class="active">
                    合租空间
                </li>
            </ul>
        </div>
        <div class="col-md-12 column">
            <h3 class="text-center">
                欢迎进入合租空间，您在这里可以找到您满意的租友，也可以自己发帖，我们会在第一时间通知您
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
                        <img alt="" src="images/hezuzhaopian001.jpg" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="images/hezuzhaopian002.jpg" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item active">
                        <img alt="" src="images/hezuzhaopian003.jpg" class="img-responsive center-block" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div> <a class="left carousel-control" href="#carousel-80759" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-80759" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>

        </div>
        <div class="col-md-12" style="border: 1px solid #e4e6eb;margin-top: 20px">
            <?php
                foreach ($rooms as $row){
            ?>
                    <div class="columnroom">
                        <h1 style="margin-left: 60px"><a style="text-decoration: none" href="<?=Url::to(['room/detail'])?>" ><?php echo $row['roomname'] ?></a>
                            <button type="button" class="btn btn-default btn-lg" style="margin-right: 100px;float: right">
                                <span class="glyphicon glyphicon-user"></span><?php echo  $row['username'];  ?>

                            </button>
                        </h1>
                        <h2 style="margin-left: 20px;margin-top: 20px;color: red">价格:<?php echo $row['roomprice'] ?>元
                            <br />
                            <button type="button" class="btn btn-default btn-lg" style="margin-right: 100px;float: right">
                                <span class="glyphicon glyphicon-time"></span> <?php echo date("Y-m-d h:m",$row['createtime']) ?>
                            </button>
                        </h2>
                        <div class="imagesdiv">
                            <?=Html::img('http://'.$row['roomimage'],['alt' => '缩略图','width' => 200,'height'=>200])?>
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
<style>
    .columnroom{
        background-color: #ffffff;
        height: 320px;
        border-bottom: 1px solid #e4e6eb ;
    }
    .imagesdiv{
        text-align: center;
    }
</style>
