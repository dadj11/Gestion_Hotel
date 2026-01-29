<?php 
namespace App\Controllers;
 
 class Controller{
    static string $views = __DIR__ ."./../../Views";
    public function render(string $paph,array $data=[]){
        extract($data);
        include(Controller::$views.$paph);
    }
 }
 ?>