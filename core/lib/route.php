<?php
namespace core\lib;

class route{

    public $ctr;
    public $action;
    public function __construct(){
        //p('route ok');
        p($_SERVER);
        if(isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI']!='/'){
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path,'/'));
            p($patharr);
        }else{
            $this->ctr = 'index';
            $this->action = 'index';
        }
    }

}

?>
