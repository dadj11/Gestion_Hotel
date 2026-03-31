<?php 
namespace App\Models;
use Database\Database;
use PDO;

class Chambre extends Model{
    public static function  All(){
        $pdo = Database::getPDOistence();
        $reqeut= "SELECT * from chambre ";
        $prep=$pdo->prepare($reqeut);
        $prep->execute;
        $result= $prep->fetchAll(PDO::FETCH_ASSOC);
        if (count($result)==0){
            return false;
        };
        return $result;
    


}

public static function Show( int $id){

}

public static function create(array $data){

}
public static function delete(int $id){

}
public static function update (array $data){
}




}



