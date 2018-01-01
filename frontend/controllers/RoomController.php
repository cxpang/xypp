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
use common\models\Roomcontent;
use yii\web\NotFoundHttpException;
class RoomController extends Controller
{
    public function actionIndex()
    {
        $contion="1=1";
        if(\Yii::$app->request->isPost){
            $params=\Yii::$app->request->post();
            if($params['roomname']){
                $contion.=" and roomname like '%".$params['roomname']."%'";
            }
            if($params['status']&&$params['status']!='全部'){
                $contion.=" and roomstatus='".$params['status']."'";
            }
        }


        $this->layout='xypk';
        $rooms=new Room();
        $result=$rooms->find()->leftJoin('x_user','uid=id')->select('room.*,x_user.username')
            ->where($contion)->orderBy('createtime desc')->asArray()->all();
        return $this->render('index',
            ['rooms'=>$result]
        );
    }
    public function actionDetail($roomid){
        if(!$roomid){
            return false;
        }
        $room=new Room();
        $roomcontent=new Roomcontent();
        $roomdetail=$room->find()->leftJoin('x_user','uid=id')->select('room.*,x_user.username')
            ->where(['room.roomid'=>$roomid])->asArray()->all();
        $content=$roomcontent->find()->leftJoin('x_user','roomcontent.uid=x_user.id')
            ->select('roomcontent.*,x_user.username,x_user.upicture,x_user.expe')
            ->where(['roomcontent.roomid'=>$roomid])->asArray()->all();
        $this->layout='xypk';
        return $this->render('detail',[
            'roomdetail'=>$roomdetail,
            'content'=>$content,
        ]);
    }
    public function actionAddcontent(){
        if(\Yii::$app->request->isPost){
            $params=\Yii::$app->request->post();
            $uid=$params['uid'];
            $roomid=$params['roomid'];
            $contenttext=$params['contenttext'];
            $time=time();
            $sql="insert into roomcontent(contenttext,uid,roomid,createtime) VALUE ('$contenttext',$uid,$roomid,$time)";
            $connection = \Yii::$app->db; //连接
            $command=$connection->createCommand($sql);
            $result = $command->execute();
            if($result){
                $user=$this->findModel($uid);
                $expe=$user->expe;
                $expe=$expe+1;
                $user->expe=$expe;
                $user->save();
                $this->redirect(['detail','roomid'=>$roomid]);
            }
            else{
                return $this->goBack();
            }

        }
    }
    protected function findModel($id)
    {
        if (($model = XUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('用户不存在.');
        }
    }
    public function actionCreate(){
        if(\Yii::$app->request->isPost){
            $uid=\Yii::$app->user->identity->id;
            $param=\Yii::$app->request->post();
            $roomimage=$_FILES;
            $handleresult=self::handleupload($roomimage);
            $room=new Room();
            $room->roomname=$param['roomname'];
            $room->roomprice=$param['roomprice'];
            $room->roomaddress=$param['roomaddress'];
            $room->roomimage=$handleresult;
            $room->roomstatus='求租中';
            $room->createtime=time();
            $room->uid=$uid;
            if($room->save()){
                $user=$this->findModel($uid);
                $expe=$user->expe;
                $expe=$expe+5;
                $user->expe=$expe;
                $user->save();
                return $this->redirect(['room/index']);
            }
            else{
                return $this->goBack();
            }


        }
    }
    public function handleupload($roomimage){
        $type=substr($roomimage['roomimage']['name'], strrpos($roomimage['roomimage']['name'], '.'));
        $temp=$roomimage['roomimage']['tmp_name'];
        $imageName=time().rand(100,900).'roomtest'.$type;
        $path='../../uploads/'.$imageName;
        move_uploaded_file($temp, $path);
        return '127.0.0.1/xypk/uploads/'.$imageName;
    }

}