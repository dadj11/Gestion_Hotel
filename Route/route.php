
<?php
use App\Controllers\ReservationController;
use App\Controllers\ChambreController;
$resevationController = new ReservationController();
$Chambre=new ChambreController();
$router= new AltoRouter();
 $router->map("GET","/" ,function(){
    
    require_once __DIR__ . "/../Views/dashboard.php";
 });
$router->map("GET","/chambres" ,function(){
    global $Chambre;
    $Chambre->chambre();
       // require_once __DIR__ . "/../Views/chambres.php";
    });
$router->map("GET","/reservation" ,function(){
    global $resevationController;
    $resevationController->reservation();
    
});

$router->map("GET",'/reservation/form',function(){
    global $resevationController;
    $resevationController->reservationForm();
}
);


$router->map("GET","/historique" ,function(){
    echo "Historique";
});
$matching = $router->match();
if($matching && is_callable($matching['target'])){
    call_user_func_array($matching['target'], $matching['params']);
}else{
    //header("HTTP/1.0 404 Not Found");
    echo "Page not found";
}