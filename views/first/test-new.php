<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\widgets\Form;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
echo $name;

Yii::$app->view->registerMetaTag([
    'title'=>'my first titile',
    'content'=>'About'
]);
/* echo "<pre>"; print_r($list);   */
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is About
    </p>
    <?= Form::widget(['pageType'=>'About Page','records'=>[1,2,3,4]]); ?>
</div>


<?php
//$this->registerJs('alert(11); console.log("ssss")');

?>