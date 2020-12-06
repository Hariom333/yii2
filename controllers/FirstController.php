<?php

namespace app\controllers;
 
use yii\web\Controller;  
use Yii;
use app\models\Student;
class FirstController extends Controller
{
    public function actionIndex(){ 

        /* $data  = Student::find()->all();
        echo "<pre>"; print_r($data); */

        /////////// INSERT ///////////
        /* $data  = new Student();
        $data->name = 'Code Improve';
        $data->email = 'code@gmail.com';
        $data->phone_no = '9090909090';
        $data->profile_pic = 'test.png';
        $data->password = '12345678';

        $data->save(); */

        ////// Update /////////////////////
 
      /*   $data  =  Student::findone(15); 
        $data->name = 'Code Improve2';
        $data->email = 'codea@gmail.com';
        $data->phone_no = '9090909199';
        $data->profile_pic = 'test1.png';
        $data->password = '12345678a9'; 
        $data->save(); */

        ///// Delete ///////
        /* $data  =  Student::findone(12); 
        $data->delete(); */


        //// Select ////

       /*  $data = Student::findone(['id'=>11]);
         
        foreach($data as $val){
            echo $val->name.'<br/>';
        } */

        ////  Condition //

        /* $data = Student::find()->asArray()->all();

        foreach($data as $val){
            //echo $val->name.'<br/>';
            echo $val['name'].'<br/>';
        } */

        //$data = Student::find()->where(['id'=>11,'name'=>'Test']);

       /*  $data = Student::find()->where(['id'=>[11,12,16],'name'=>'noone'])
        ->groupBy('id')
        ->orderBy('name')
        ->all() 
        ;  // IN
        //echo $data->createCommand()->getRawSql(); die;
            //->all();

        foreach($data as $val){
            //echo $val->name.'<br/>';
            echo $val['name'].'<br/>';
        } 
 */
        /// JOIN ///////////

        $data = Student::find()
        ->select('student.*,subject.name')
        ->leftJoin('subject','subject.student_id=student.id')
       /*  ->where(['student.id'=>[11,12,16],'student.name'=>'noone'])
        ->groupBy('student.id') */
        ->orderBy('student.name');
        echo $data->createCommand()->getRawSql(); die;
        //->all() 
        ;  // IN
        //echo $data->createCommand()->getRawSql(); die;
            //->all();


        //echo "<pre>"; print_r($data);

 

        echo "yes"; die;
    } 

    public function actionComponent(){  
       // echo Yii::$app->common->getToken();
       $data = Yii::$app->common->getData();
       //echo "<pre>"; print_r($data);
        echo " component";
    }
 
    public function actionQueryBuilder(){ 
        $data = new Student();
        $data->getData(); 
       // echo "query  builder";
    }
     public function actionAbout(){
         //$this->layout = 'test';  
        
       // return $this->render('test-new');  // with layout
        $response = [];
        $response['name'] = 'Code Improve';
        $response['list'] = ['Test','Demo','CRUD'];

       return $this->render('test-new',$response);
       //return $this->renderPartial('test-new');
    }

    public function actionHome(){  
        
        return $this->render('test'); 
    }

    public function actionInfo(){
        $data = Yii::$app->request->get();
        echo $data['key'];
            echo "<pre>"; print_r($data);
        echo "Info Page"; die;
    }

    public function actionDemo(){
        $data = Yii::$app->request->get();
        echo $data['key'];
            echo "<pre>"; print_r($data);
        echo "Second Page"; die;
    }

    public function actionDemo_second(){

        echo "actionDemo_second"; die;
    }
}
