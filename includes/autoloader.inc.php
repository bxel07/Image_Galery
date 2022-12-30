<?php 
    declare(strict_types=1);
    spl_autoload_register('myAutoloader');

    function myAutoloader($className) {
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if(strpos($url, 'includes')){
            $path = "../classes/";
        } else {
            $path = "/classes";
        }
        $ext = ".class.php";
        include_once $path.$className.$ext;
    }
?>