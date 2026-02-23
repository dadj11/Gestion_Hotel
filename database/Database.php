<?php 
namespace Database;
use PDO;
class Database{
 static private $pdo;


static function getPDOistence(){
    $dsn=__DIR__."/database.db";
    if(!Database::$pdo){
        Database::$pdo= new PDO("sqlite:".$dsn);
    };
    return Database::$pdo;
}
 

static function getMigration(){
    $Pdo=Database::getPDOistence();
    $ddl=__DIR__."/ddl.sql";
    $requet=file_get_contents($ddl);
    $Pdo->exec($requet);

}
 
 
  
    
}