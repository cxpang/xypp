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
                        <img alt="" src="http://www.runoob.com/try/bootstrap/layoutit/v3/default2.jpg" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="http://www.runoob.com/try/bootstrap/layoutit/v3/default.jpg" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item active">
                        <img alt="" src="http://www.runoob.com/try/bootstrap/layoutit/v3/default1.jpg" />
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div> <a class="left carousel-control" href="#carousel-80759" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-80759" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>

</div>
