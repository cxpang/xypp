<?php
$this->title = '校园拼客';
use yii\helpers\Url;
?>
<title>校园拼客</title>
<div class="main">
    <div class="index-contents">
        <div class="image-contents">
            <a href="<?=Url::to(['room/index']) ?>"><img class="image" title="拼房" src="images/hezu.jpg"></a>
        </div>
        <div class="image-contents">
            <a href=""><img class="image" src="images/lvxing.jpg"></a>
        </div>
        <div class="image-contents">
            <a href=""> <img style="margin-left: 50px;" class="image" src="images/qinggan.jpg"></a>
        </div>
        <div class="image-contents">
            <a href=""><img class="image" src="images/zhuixing.jpg"></a>
        </div>
        <div class="image-contents">
            <a href=""> <img class="image" src="images/jianshen.jpg"></a>
        </div>
        <div class="image-contents">
            <a href=""><img class="image" src="images/zhuimeng.jpg"></a>
        </div>
        <div class="image-contents">
            <a href=""><img style="margin-left: -30px;" class="image" src="images/jiushu.jpg"></a>
        </div>
        <div class="image-contents">
            <a href=""> <img style="margin-left: -30px;" class="image" src="images/kaoshi.jpg"></a>
        </div>
        <div class="image-contents">
            <a href=""> <img class="image" src="images/tushuguan.jpg"></a>
        </div>
    </div>
</div>
<style>
    body{
        background-color:#f5f5f5 ;
    }
    .image-contents{
        width: 250px;
        height: 250px;
        border: 1px solid #f5f5f5;
        margin-left: 280px;
        float: left;
        cursor: pointer;
    }
    .main{
        height: 100%;
        width: 100%;
    }
    .index-contents{
        width: 100%;
        height: 700px;
        margin: 0 auto;
        margin-top: 50px;
    }
    .image{
        height: 200px;
        border-radius: 30px;
        margin: 10px;
    }

</style>
