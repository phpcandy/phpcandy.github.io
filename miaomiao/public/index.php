<?php
//echo 'hello world!';
ini_set('display_errors',1);
error_reporting(E_ALL);
define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
//$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
//$app->run();
$application = new Yaf_Application(APP_PATH.'/conf/application.ini');

$application->bootstrap()->run();

//$loader = Yaf_Loader::autoload('Foo_Bar_Test');
//var_dump($loader);
//exit;
//error_reporting(E_ALL);
//$app = new Yaf_Application("conf.ini");
//$app->run();
?>
