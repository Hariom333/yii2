<?php

namespace app\models;

use Yii;
use app\components\CountryValidator;
/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $gender
 * @property string $address
 * @property string $created_at
 * @property int $ref_id
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone','ref_id'], 'required'], 
            [['gender', 'address'], 'string'],   
            //['address','compare','compareAttribute'=>'email','message'=>'Not match'],
           // ['ref_id','compare','compareValue'=>'30','operator'=>'>=','type'=>'number'],
            ['name','required','message'=>'User Name must be filled'],
            ['email','required','message'=>'Email ID must be filled'],
            [['created_at'], 'safe'], 
            [['ref_id'], 'integer'],
            ['profile','file'], // extension=>'jpg,pnf,pdf'
            [['name', 'email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 12,'min'=>6],      
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'address' => 'Address',
            'created_at' => 'Created At',
            'ref_id' => 'Ref ID', 
            'profile'=>'Profile'
        ];
    }
}
