<?php

namespace app\controllers;
 
use yii\web\Controller;   
use yii\base\Event;

class ReportController extends Controller
{ 
    const EVENT_DEMO = 'EventDemo';
    /// 1 
    public function actions()
    {
       // \Yii::$app->language = 'hi';
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex(){    
        //echo \Yii::t('app','Welcome'); die; 
        echo "Report Controller";
       // return $this->render('report'); 
    }
    public function actionAdd(){   
        return $this->render('add'); 
    }
  /*   public function actionIndex(){ 
        $this->on(self::EVENT_DEMO,'upperData','hello world');
        $this->trigger(self::EVENT_DEMO);
        $this->off(self::EVENT_DEMO);  
    } */
   /// 2 
    public function actionMyevent(){ 
        $this->on(self::EVENT_DEMO, 
            function (Event $event){
                $response = ucwords($event->data);
                echo $response.' self function'; 

                //////
            }
        ,'hello world');
        $this->trigger(self::EVENT_DEMO);
        $this->off(self::EVENT_DEMO);  
    }

    /// object /////  3 $this 
    public function actionTest(){ 
        $this->on(self::EVENT_DEMO,[$this,'upperData'],'hello world');
        $this->trigger(self::EVENT_DEMO);
        $this->off(self::EVENT_DEMO);  
    }
 
    function  upperData(Event $event){
        $response = ucwords($event->data);
        echo $response;
        echo " This is controller Event";
        return $response;
    }

      /////  4 class 
     public function actionTest2(){ 
        $this->on(self::EVENT_DEMO,[ReportController::className(),'upperData'],'hello world new');
        $this->trigger(self::EVENT_DEMO);
        $this->off(self::EVENT_DEMO);  
    }


    /// 5  cllass base
    public function actionMyevent2(){ 
        Event::on(self::className(),self::EVENT_DEMO, 
            function (Event $event){
                $response = ucwords($event->data);
                echo $response.' self function'; 

                //////
            }
        ,'hello world class myevent');
        Event::trigger(self::className(),self::EVENT_DEMO);
        Event::off(self::className(),self::EVENT_DEMO);  
    }

    // 6 global 
    public function actionTest3(){ 
        \Yii::$app->on(self::EVENT_DEMO,'upperData','hello world new 3');
        \Yii::$app->trigger(self::EVENT_DEMO);
        \Yii::$app->off(self::EVENT_DEMO);  
    }
   
}
