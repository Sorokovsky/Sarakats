<?php 
abstract class AbstractServerArray{
    protected array $serverArray;
    public function get(string $key, $default = null){
        return $this->serverArray[$key] ?? $default;
    }
    public function has(string $key):bool{
        return isset($this->serverArray[$key]);
    }
    public function add(string $key, $value){
        $this->serverArray[$key] = $value;
    }
    public function delete(string $key){
        unset($this->serverArray[$key]);
    }
}