<?php 
require_once('./AbstractServerArray.php');
class Session extends AbstractServerArray{
    public function __construct() {
        $this->serverArray = &$_SESSION;
        session_start();
    }
    public function __destruct(){
        session_destroy();
    }
}