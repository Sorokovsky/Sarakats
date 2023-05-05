<?php 
class View{
    public function render(string $templateName) {
        $name = $templateName;
        if($name == "/"){
            $name = "/index";
        }
        $templatePath = 'Templates' . $name . '.php';
        if (file_exists($templatePath)){
            require($templatePath);
        }
    }
}