<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\EmployeeCrud;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeCrud */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo Html::dropDownList('sortDropDown','name',[''=>'Select','name'=>'Name','email'=>'Email']) ?>
    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php 
        echo ListView::widget([
            'dataProvider'=>$dataProvider,
            'itemView'=>'listview',
            'viewParams'=>[
                'testData'=>'Hello Test Data'
            ],
            //'separator'=>"<hr/>",
          //  'options'=>['class'=>'well'],
          'itemOptions'=>['class'=>'well'], 
        ]);  
    ?>

    <?php 
      /*   echo ListView::widget([
            'dataProvider'=>$dataProvider,
            'itemView'=>function($model,$item,$key,$widgets){
                ?>
                    <div>
                    <p><?php echo $model->name;?></p>
                    <p><?php echo $model->email;?></p>
                    <p><?php echo $model->phone;?></p>
                    </div>
                <?php
            }
        ]); */
    ?>



</div>
