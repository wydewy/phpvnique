<?php
/**
 * 定义常量
 * 加载函数库
 * 启动框架
 */
define('WYDEWY',realpath('.'));
define('CORE',WYDEWY.'/core');
define('APP',WYDEWY.'/app');
define('DEBUG',true);
#define('_PHP_FILE_',$_SERVER['SCRIPT_NAME']);

if(DEBUG){
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}else{
    ini_set('display_errors', '0');
}

$fun_path = CORE.'/common/function.php';
include $fun_path;
$core_path =  CORE.'/wydewy.php';
include $core_path;

spl_autoload_register('\core\wydewy::load');

\core\wydewy::run();

?>
