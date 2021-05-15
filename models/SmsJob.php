<?php 

namespace app\models;
use Yii;
use yii\base\BaseObject; 

class SmsJob extends BaseObject implements \yii\queue\JobInterface
{
    public $message;
    public $phone;
    
    public function execute($queue)
    {
      
        for($i=0;$i<=100;$i++){ 
            echo $i.$this->message.' Inserted'.PHP_EOL;
            $sql = Yii::$app->db->createCommand()->insert('student',[
                'name'=>'Code Improve',
                'email'=>'test@gmail.com',
                'phone_no'=>'9999998980',
                'profile_pic'=>'test.jpg',
                'password'=>'1222222'

            ])->execute(); 
        }
        
    }
}

