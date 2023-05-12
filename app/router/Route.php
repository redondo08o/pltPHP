<?php
class Route{
    public static function route($controller , $method)
    {
        $file = '../app/controllers/'.$controller.'.php';

        if (file_exists($file)) {
            require_once $file;
            $object = new $controller();
            if(method_exists($object,$method)){
                $object->$method();
            }
            else{
                echo 'el metodo no existe';
            }
        }
        else{
            echo 'el controlador no existe';
        }
    }
} 