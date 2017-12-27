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
use common\models\Room;
class RoomController extends Controller
{
    public function actionIndex()
    {

        $this->layout='xypk';
        $rooms=new Room();
        $result=$rooms->find()->leftJoin('x_user','uid=id')->select('room.*,x_user.username')->orderBy('createtime desc')->asArray()->all();
        return $this->render('index',['rooms'=>$result]);
    }

}