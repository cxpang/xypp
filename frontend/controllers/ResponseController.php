<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/11
 * Time: 20:38
 */

namespace frontend\controllers;
use common\models\Room;
use common\models\Roomcontent;
use yii\web\NotFoundHttpException;
use common\models\UploadForm;
use yii\web\Controller;
use common\models\XUser;
use yii\web\UploadedFile;

class ResponseController  extends Controller
{
    public function actionIndex()
    {

        $this->layout='xypk';
        $roomcontent=new Roomcontent();
        $room=new Room();
        $currentid=\Yii::$app->user->getId();
        $rooms=$room->find()->where(['uid'=>$currentid])->asArray()->all();
        //$roomcontent=$roomcontent->find()->where(['roomid'=>18])->asArray()->all();
        $responses=$roomcontent->find()->leftJoin('room','roomcontent.roomid=room.roomid')->leftJoin('x_user','x_user.id=roomcontent.uid')->
            select('room.roomname,roomcontent.*,x_user.username,x_user.upicture')
            ->where(['room.uid'=>$currentid])->orderBy('roomcontent.createtime desc')->limit(1)->asArray()->all();

//        $responses=$room->find()->leftJoin('roomcontent','room.roomid=roomcontent.roomid')->
//            where(['room.uid'=>$currentid])
//            ->select('room.roomname,roomcontent.*')
//            ->asArray()->all();
//        foreach ($rooms as $room){
//            $content=$roomcontent->find()->leftJoin('x_user','roomcontent.uid=x_user.id')->leftJoin('room','room.roomid=roomcontent.roomid')
//                ->select('room.roomname,roomcontent.*,x_user.username,x_user.upicture,x_user.expe')
//                ->where(['roomcontent.roomid'=>$room['roomid']])->asArray()->all();
//        }
//        var_dump($test);
//        exit(0);

//        $roomresponse=
        return $this->render('index',[
            'roomresponse'=>$responses
        ]);
    }
}