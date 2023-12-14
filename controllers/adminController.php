<?php
include_once('../models/admin.php') ;
include_once('../database/config.php');
class EtudiantController extends Connexion{
 function __construct() 
{
parent::__construct();
 }

function liste(){
$query = "select * from admin";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}


}

?>