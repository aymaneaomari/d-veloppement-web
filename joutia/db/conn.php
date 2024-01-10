<?php 
$host='127.0.0.1';
$db='joutia';
$user="root";
$pass= "0000";
try{
    $pdo=new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo $e->getMessage();
}
require_once "Crud.php";



?>