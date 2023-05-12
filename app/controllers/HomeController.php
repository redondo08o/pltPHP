<?php 

require_once ('./app/structure/Structure.php');

class HomeController{
    public function __construct()
    {
        $this->view = new Structure();
    }
    public function index()
    {
        $this->view->views('index');
    }
    public function index2()
    {
        echo 'este es el index 2';
    }
}