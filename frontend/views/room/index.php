<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
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
            <?php $form = ActiveForm::begin(['method' => "post",'action'=>Url::to(['room/index']),'options' => ['style' => 'margin-top: 10px;margin-bottom:10px;'] ]); ?>
            <div class="col-md-3">
            关键词:<input type="text"  name="roomname" value="<?=Yii::$app->request->get('roomname')?>" placeholder="合租关键词">
            </div>
            <div class="col-md-2">
                帖子状态:
                <select name="status">
                    <option>全部</option>
                    <option>求租中</option>
                    <option>已结帖</option>
                </select>
            </div>

            <input type="submit" name="search_submit" value="过滤" class="btn">
            <?php $form = ActiveForm::end(); ?>
            <button class="btn btn-primary btn-lg" style="float: right;margin-bottom: 10px;" data-toggle="modal" data-target="#myModal">
                我要发布
            </button>
        </div>

        <div class="col-md-12" style="border: 1px solid #e4e6eb;margin-top: 20px">
            <?php
                foreach ($rooms as $row){
            ?>
                    <div class="columnroom">
                        <h1 style="margin-left: 60px"><a style="text-decoration: none" href="<?=Url::to(['room/detail','roomid'=>$row['roomid']])?>" ><?php echo $row['roomname'] ?></a>
                            <span class="span"><?php echo $row['roomstatus']?></span>
                            <button type="button" class="btn btn-default btn-lg" style="margin-right: 100px;float: right">
                                <span class="glyphicon glyphicon-user"></span><?php echo  $row['username'];  ?>

                            </button>
                        </h1>
                        <h2 style="margin-left: 20px;margin-top: 20px;color: red">价格:<?php echo $row['roomprice'] ?>元
                            <br />
                            <button type="button" class="btn btn-default btn-lg" style="margin-right: 100px;float: right;    margin-top: 150px;">
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
<!--发布合租模态框-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    发布合租空间
                </h4>
            </div>
            <form action="<?=Url::to(['room/create'])?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input name="_csrf-frontend" type="hidden" id="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>">
                 合租帖子名:<input type="text" name="roomname" required class="form-control">
                 合租地点:<input type="text" name="roomaddress" required class="form-control">
                 合租价格:<input type="text" id="roomprice" placeholder="只能输入数字" name="roomprice" onblur="checkprice();" required class="form-control">
                 上传照片:<input type="file" name="roomimage" required class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">关闭
                </button>
                <button type="submit" class="btn btn-primary">
                    提交
                </button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
<script>
    function checkprice() {
//       var price=$("#roomprice").val();
//       var isnum=parseInt(price);
//       if(isNaN(isnum)){
//           alert("输入非法");
//           $("#roomprice").focus();
//           return false;
//       }
//       else{
//           return true;
//       }


    }
</script>
