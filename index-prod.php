<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yiiroot/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';


require(dirname(__FILE__).'/protected/globals/globals.php');
require_once($yii);
Yii::createWebApplication($config)->run();
