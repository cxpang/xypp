<?php
use yii\helpers\Url;
$this->title = '个人中心';
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ul class="breadcrumb">
                <li>
                    <a href="<?=Url::to(['site/index'])?>">首页</a>
                </li>
                <li>
                    个人中心
                </li>
            </ul>
            <div class="panel-group" id="panel-472866">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-472866" href="#panel-element-643103">基本信息</a>
                    </div>
                    <div id="panel-element-643103" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-2"></div> <div class="col-lg-2"style="text-align: right">用户名:</div><div class="col-lg-8"><?=Yii::$app->user->identity->username?></div>
                           </div>
                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">头像:</div><div class="col-lg-8"><img alt="140x140" src="http://<?=Yii::$app->user->identity->upicture?>" class="img-circle" /></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">性别:</div><div class="col-lg-8"><?=Yii::$app->user->identity->sex?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">地址:</div><div class="col-lg-8"><?=Yii::$app->user->identity->address?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">大学:</div><div class="col-lg-8"><?=Yii::$app->user->identity->university?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3"></div><div class="col-lg-2" style="text-align: right"> <button type="button" class="btn btn-primary btn-default" data-toggle="modal" data-target="#infoModal">修改</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-472866" href="#panel-element-871547">安全信息</a>
                    </div>
                    <div id="panel-element-871547" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">原密码:</div><div class="col-lg-8"><input type="password" name="oldpassword"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">新密码:</div><div class="col-lg-8"><input type="password" name="newpassword"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">重复密码:</div><div class="col-lg-8"><input type="password" name="renewpassword"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3"></div><div class="col-lg-2" style="text-align: right"> <button type="button" class="btn btn-primary btn-default">修改</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-472866" href="#panel-element-871548">绑定信息</a>
                    </div>
                    <div id="panel-element-871548" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">邮箱:</div><div class="col-lg-8"><?=Yii::$app->user->identity->email?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">手机号:</div><div class="col-lg-8"><?=Yii::$app->user->identity->uphone?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--基本信息提交模态框-->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    个人信息修改
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-2"></div> <div class="col-lg-2"style="text-align: right">用户名:</div><div class="col-lg-8"><?=Yii::$app->user->identity->username?></div>
                </div>
                <div class="row">
                    <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">头像:</div><div class="col-lg-6"><img alt="140x140" src="http://<?=Yii::$app->user->identity->upicture?>" class="img-circle" /></div><div class="col-lg-2"><button type="button" class="btn btn-primary btn-default" onclick="inputfile()">上传头像</button><input type="file" id="newimage" style="display: none;"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">性别:</div><div class="col-lg-8"><?=Yii::$app->user->identity->sex?></div>
                </div>
                <div class="row">
                    <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">地址:</div><div class="col-lg-8"><input type="text" value="<?=Yii::$app->user->identity->address?>"></div>
                </div>

                <div class="row">
                    <div class="col-lg-2"></div><div class="col-lg-2"style="text-align: right">大学:</div><div class="col-lg-8"><input type="text" value="<?=Yii::$app->user->identity->university?>"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary">
                    确认提交
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
<style type="text/css">
    .row{
        margin-top: 20px;
        font-size: 20px;
        font-family: "Microsoft YaHei";
    }
    input{
        border-radius: 10px;
        border: 1px solid #337ab7;
        font-size: 20px;
    }
</style>
    <script type="text/javascript">
        function inputfile() {
             $("#newimage").click();
        }

    </script>
