<?php
namespace core;
class wydewy{
    public static $classMap = array();
    static public function run(){
       p('ok');
       new \core\lib\route();
    }
    
    //自动加载类
    static public function load($class){
        $class = str_replace('\\','/',$class);
        $file = WYDEWY.'/'.$class.'.php';
        // p($file);exit();
        if(isset($classMap[$class])){
            return true;
        }else{
            if(is_file($file)){
                include $file;
                $classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }

}

