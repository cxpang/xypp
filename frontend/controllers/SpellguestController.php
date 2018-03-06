<?php
namespace frontend\controllers;


use yii\web\Controller;
use common\models\Room;
use common\models\Traval;
class SpellguestController extends Controller
{
    public function actionIndex(){
        $uid=\yii::$app->user->identity->getId();
        $this->layout='xypk';
        $rooms=[];
        $room=new Room();
        $rooms=$room->find()->where(['uid'=>$uid])->orderBy('createtime desc')->asArray()->all();

        $traval=[];
        $traval=Traval::find()->where(['uid'=>$uid])->orderBy('createtime desc')->asArray()->all();




       return  $this->render('index',
           [
               'rooms'=>$rooms,
               'travals'=>$traval,
           ]);

    }

}