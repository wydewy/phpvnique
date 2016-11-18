<?php
namespace vnique\web;

/**
 * Application is the base class for all application classes.
 * @author wydewy <wydewy@126.com>
 */
class Application extends \vnique\base\Application
{
    /**
     * Handles the specified request.
     * @return Response the resulting response
     */
    public function handleRequest()
    {
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
  
		//将出错信息输出到一个文本文件
		ini_set('error_log', 'error.log');
		
        $router = $_GET['r'];
        list($controllerName, $actionName) = explode('/', $router);
        $ucController = ucfirst($controllerName);
        $controllerNameStr = $this->controllerNamespace . '\\' . $ucController . 'Controller';
        $controller = new $controllerNameStr();
        $controller->id = $controllerName;
        $controller->action = $actionName;
        return call_user_func([$controller, 'action'. ucfirst($actionName)]);
        //cal_user_func这个函数可传入两个参数，类型均为数组：第一个数组的第一个元素是函数的所属对象，第二是是函数名，若由第二个数组，则是函数的参数。
    }
}
/*
*将之前放在index.php中的内容放到Application的handleRequest方法里了。
*程序的入口 
*/ 
