<?php
define('VNIQUE_PATH', dirname(__DIR__));
require_once(VNIQUE_PATH . '/vendor/autoload.php');
require_once(VNIQUE_PATH . '/src/Vnique.php');
$application = new vnique\web\Application();//auto load framework start-class
$application->run();//start framework

