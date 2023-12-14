<?php
include_once('../models/Etudiant.php') ;
include_once('../database/config.php');
class EtudiantController extends Connexion{
 function __construct() 
{
parent::__construct();
 }
 function insert(Etudiant $e){
 $query="insert into etudiant(nom,prenom,email,password,sexe,age,ville,niveau,specialite)values ( ?, ?, ?,?, ?, ?, ?,?, ?)";
$res=$this->pdo->prepare($query); 
$aryy=array($e->getNom(),$e->getPrenom(),$e->getEmail(),$e->getPassword(),$e->getSexe(),$e->getAge(),$e->getVille(),$e->getNiveau(),$e->getSpecialite() );
return $res->execute($aryy);
 }

 function getEtudiant($id){
    $query="SELECT * FROM etudiant WHERE idEtudiant = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    return $res->fetch();
}
function delete($idEtudiant) {
$query = "delete from etudiant where idEtudiant=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idEtudiant));
}
function liste(){
$query = "select * from etudiant";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_user(Etudiant $e, $idEtudiant)
{
$sql = "UPDATE etudiant SET  nom=?, prenom=?,email=?,password=? ,sexe=?,age=?,ville=?,niveau=?,specialite=?  WHERE idEtudiant=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($e->getNom(),$e->getPrenom(),$e->getEmail(),$e->getPassword(),$e->getSexe(),$e->getAge(),$e->getVille(),$e->getNiveau(),$e->getSpecialite(),$idEtudiant));
}


}

?>