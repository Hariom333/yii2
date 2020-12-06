<?php

namespace app\controllers;
 
use yii\web\Controller; 
use Yii;
class FirstTestController extends Controller
{
    public function actionIndex(){ 
        echo Yii::$app->common->getToken();
        echo "yes"; die;
    }
 
     public function actionTest(){

        echo "test"; die;
    }

    public function actionDemoFirst(){

        echo "actionDemoFirst"; die;
    }

    public function actionDemo_second(){

        echo "Test actionDemo_second"; die;
    }
}
