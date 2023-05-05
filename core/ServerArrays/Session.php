<?php 
require_once('./AbstractServerArray.php');
class Session extends AbstractServerArray{
    public function __construct() {
        if (session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
        $this->serverArray = &$_SESSION;
    }
    public function __destruct(){
        session_destroy();
    }
}