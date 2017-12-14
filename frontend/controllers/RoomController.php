<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/14
 * Time: 13:44
 */

namespace frontend\controllers;


use yii\web\Controller;
use common\models\XUser;
class RoomController extends Controller
{
    public function actionIndex()
    {

        $this->layout='xypk';
        return $this->render('index');
    }

}