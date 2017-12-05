<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/2
 * Time: 17:22
 */

namespace frontend\controllers;

use yii\web\Controller;
class PersonController extends Controller
{
    public function actionIndex()
    {

        $this->layout='xypk';
        return $this->render('index');
    }
}