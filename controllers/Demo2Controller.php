<?php

namespace app\controllers;

use Yii;
use app\components\MyBehavior;

class Demo2Controller extends \yii\web\Controller
{
    // MyBehavior::className(),  // anonymous behavior     // 2
           /* [
               'class'=>MyBehavior::className(),
               'prop1'=>'test',
               'prop2'=>'test2'
           ], */   //2   anonymous behavior 

         //   'behaviour1'=>MyBehavior::className() // // name behavior  // 3 

    /*  public function behaviors()
    { 
        return [ 
           
            'behaviour2' =>[
                'class'=>MyBehavior::className(),
                'prop1'=>'Code',
                'prop2'=>'Improve'
            ]
        ];
    }  */
    public function actionIndex()
    { 
        //$this->detachBehavior('behaviour1');
        echo " demo 2 controller";  
        // return $this->render('index');
    }
 

    public function actionTest()
    { 
          /* $this->attachBehavior('behaviour1',[ 
                'class'=>MyBehavior::className(),
                'prop1'=>'Code',
                'prop2'=>'Improve' 
        ]);  */ 
        echo " test 2 controller";  
        // return $this->render('index');
    }
    public function actionSetSession(){
        Yii::$app->session->set('UserName','Code Improve');
        Yii::$app->session->set('Email','CodeImprove@gmail.com');
        
        Yii::$app->session->setFlash('message','Success');
        echo "set session";
    }
    public function actionGetSession(){
         echo Yii::$app->session->get('UserName').'=='.Yii::$app->session->get('Email');
        echo " get session";
    }
    public function actionUnsetSession(){

       // unset(Yii::$app->session['UserName']);
       //Yii::$app->session->remove('UserName');
       Yii::$app->session->destroy();
       echo " unset session";
   }
}
