<?php 
    declare(strict_types=1);
    include_once 'autoloader.inc.php';

        header('Content-Type: application/json');
        $file = $_FILES['file'];        
        $object = json_encode($file, JSON_PRETTY_PRINT);
       try{
            $up = new upload($object);
            $up->validate();
            header('Location:http://127.0.0.1/php_oop/Project/img_galery_project/index.php?success');
        } catch (TypeError $e) {
            echo $e->getMessage();
        }
?>