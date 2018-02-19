<?php
header("Expires: Mon, 26 Jul 2018 05:00:00 GMT");                                                               // always modified right now
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");                                          // HTTP/1.1
header("Cache-Control: private, no-store, max-age=0, no-cache, must-revalidate, post-check=0, pre-check=0");    // HTTP/1.0
header("Pragma: no-cache");                                                                                     // change the following paths if necessary
$yii=dirname(__FILE__).'/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
require_once($yii);
Yii::createWebApplication($config)->run();
