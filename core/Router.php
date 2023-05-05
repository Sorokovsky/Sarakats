<?php
require_once('View.php'); 
class Router{
    private $view;
    function __construct(){
        $this->view = new View();
    }
    public function init(){
        return $this->view->render($_SERVER["REDIRECT_URL"]);
    }
}