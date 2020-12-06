<?php
/* @var $this yii\web\View */
?>
<h1>demo2/index</h1>

<p>
    <?php 
     echo Yii::$app->session->getFlash('message').' '; 
        if(Yii::$app->session->has('UserName')){
         echo Yii::$app->session->get('UserName'). ' is User Name.';
        }
    ?>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
