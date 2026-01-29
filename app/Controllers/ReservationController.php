<?php 
namespace App\Controllers;
use App\Models\Reservation;

 class ReservationController extends Controller{
    public function reservation(){
        $reservations = Reservation::all();
        $this->render("/reservation/index.php", compact("reservations"));
    }
    public function reservationForm(){
         $this->render("/reservation/reservationForm.php");
    }
    
 }