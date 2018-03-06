<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->title = '拼客中心';
//var_dump($travals);
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ul class="breadcrumb">
                <li>
                    <a href="<?=Url::to(['site/index'])?>">首页</a>
                </li>
                <li class="active">
                    拼客中心
                </li>
            </ul>
            <div class="tabbable" id="tabs-891217">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#panel-115810" data-toggle="tab">旅行故事</a>
                    </li>
                    <li>
                        <a href="#panel-255883" data-toggle="tab">合租空间</a>
                    </li>
                    <li>
                        <a href="#panel-255884" data-toggle="tab">情感天地</a>
                    </li>
                    <li>
                        <a href="#panel-255885" data-toggle="tab">追星剧场</a>
                    </li>
                    <li>
                        <a href="#panel-255886" data-toggle="tab">健身空间</a>
                    </li>
                    <li>
                        <a href="#panel-255887" data-toggle="tab">追梦天涯</a>
                    </li>
                    <li>
                        <a href="#panel-255888" data-toggle="tab">旧书市场</a>
                    </li>
                    <li>
                        <a href="#panel-255889" data-toggle="tab">考试有方</a>
                    </li>
                    <li>
                        <a href="#panel-2558811" data-toggle="tab">图书馆约</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="panel-115810">
                        <?php
                        foreach ($travals as $row){
                            ?>
                            <a href="<?=Url::to(['travel/detail','travalid'=>$row['travalid']])?>" style="text-decoration: none">
                                <div class="panel panel-primary" style="cursor: pointer;margin-top: 50px;">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <img style="width: 50px;height: 50px;border-radius: 50%" src="<?=$row['travalimage']?>"><?=$row['travalname']?>
                                            --<?=$row['status']?>
                                        </h3>
                                    </div>
                                    <div class="panel-footer">
                                        发表时间:<?=date('Y-m-d H:i:s',$row['createtime'])?>
                                    </div>

                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="tab-pane" id="panel-255883">
                              <?php
                              foreach ($rooms as $room){
                                  ?>
                                  <a href="<?=Url::to(['room/detail','roomid'=>$room['roomid']])?>" style="text-decoration: none">
                                  <div class="panel panel-primary" style="cursor: pointer;margin-top: 50px;">
                                      <div class="panel-heading">
                                          <h3 class="panel-title">
                                              <img style="width: 50px;height: 50px;border-radius: 50%" src="<?=$room['roomimage']?>"><?=$room['roomname']?>
                                              --<?=$room['roomstatus']?>
                                          </h3>
                                      </div>
                                      <!--                            <div class="panel-body">-->
                                      <!--                                <img style="width: 50px;height: 50px;border-radius: 50%" src="--><?php // echo Yii::$app->user->identity->upicture;?><!--">--><?php //echo Yii::$app->user->identity->username; ?>
                                      <!--                                :--><?//=$roomresponse[0]['roomname']?>
                                      <!--                                <h2>发表于合租空间</h2>-->
                                      <!---->
                                      <!--                            </div>-->
                                      <div class="panel-footer">
                                          发表时间:<?=date('Y-m-d H:i:s',$room['createtime'])?>
                                      </div>

                                  </div>
                                  </a>
                              <?php } ?>
                    </div>
                    <div class="tab-pane" id="panel-255884">
                       情感
                    </div>
                    <div class="tab-pane" id="panel-255885">
                        <p>
                            追星剧场
                        </p>
                    </div>
                    <div class="tab-pane" id="panel-255886">
                        <p>
                            健身空间
                        </p>
                    </div>
                    <div class="tab-pane" id="panel-255887">
                        <p>
                            追梦天涯
                        </p>
                    </div>
                    <div class="tab-pane" id="panel-255888">
                        <p>
                            旧书市场
                        </p>
                    </div>
                    <div class="tab-pane" id="panel-255889">
                        <p>
                            考试有方
                        </p>
                    </div>
                    <div class="tab-pane" id="panel-2558811">
                        <p>
                            图书馆约
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
