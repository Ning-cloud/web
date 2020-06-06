<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

//使用require 调用，因为现在还没有注册自动加载函数
//第三方autoloader
require __DIR__ . '/../vendor/autoload.php';
// 这个是Yii的Autoloader，放在最后面，确保其插入的autoloader会放在最前面
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
