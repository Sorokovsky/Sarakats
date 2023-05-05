<?php
require_once("./AbstractServerArray.php");
class Cookie extends AbstractServerArray{
    public function __construct(){
        $this->serverArray = $_COOKIE;
    }
    public function add(string $key, $value){
        setcookie($key, $value);
        parent::add($key, $value);
    }
    public function delete(string $key){
        setcookie($key, null, -1);
        parent::delete($key);
    }
}