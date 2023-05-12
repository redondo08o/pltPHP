<?php

class Structure{
    public function views ($view){
        require_once 'views/'.$view.'.php';
    }
}