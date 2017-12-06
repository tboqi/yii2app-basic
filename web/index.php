<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
$yiiRoot = dirname(dirname(dirname(__DIR__)));
require $yiiRoot . '/vendor/autoload.php';
require $yiiRoot . '/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
