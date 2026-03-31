<?php 
namespace App\Controllers;
use App\Models\Chambre;
class ChambreController extends Controller implements Resource{
    
     public function index(){
        $chambre= Chambre::All();
        if ($chambre == false){
            $chambres=[];
        };

          $this->render("/chambre/index.php",["chambre"=> $chambre]);
     }
    public function createform(){
        $this->render("/chambre/create.php");
    }
    public function storaction(){

    }

     public function update(){
        
     }
    public function updateAction(){

    }
    public function show(){

    }
    public function delete(){

    }

}