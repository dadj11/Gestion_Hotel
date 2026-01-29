<?php 
namespace App\Controllers;
class ChambreController extends Controller{
    public function chambre(){
        $this->render("/chambre/index.php");
    }


}