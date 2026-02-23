<?php 
namespace App\Controllers;
use App\Models\Reservation;

 class ReservationController extends Controller implements Resource{
             public function index(){
                 $reservations = Reservation::all();
        $this->render("/reservation/index.php", compact("reservations"));
           
     }
    public function createform(){
        $this->render("/reservation/reservationForm.php");
         
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