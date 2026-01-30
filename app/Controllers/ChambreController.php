<?php 
namespace App\Controllers;
class ChambreController extends Controller implements Resource{
    
     public function index(){
          $this->render("/chambre/index.php");
     }
    public function createform(){
        $this->render("/chambre/create.php");
    }
    public function storaction(){

    }
    public function show(){

    }
    public function delete(){

    }

}