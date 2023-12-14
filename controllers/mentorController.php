<?php
include_once('../models/Mentor.php') ;
include_once('../database/config.php');
class MentorController extends Connexion{
 function __construct() 
{
parent::__construct();
 }
 function insert(Mentor $m){
 $query="insert into mentors(nom,prenom,email,password,sexe,age,ville,niveau,specialite,domaine,poste,competence)values ( ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?)";
$res=$this->pdo->prepare($query); 
$aryy=array($m->getNom(),$m->getPrenom(),$m->getEmail(),$m->getPassword(),$m->getSexe(),$m->getAge(),$m->getVille(),$m->getNiveau(),$m->getSpecialite(),$m->getDomaine(),$m->getPoste(),$m->getCompetence() );
return $res->execute($aryy);
 }

 function getMentor($id)
    {
        $query = "SELECT * FROM mentors WHERE idMentor = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        return $res->fetch();
    }

function delete($idMentor) {
$query = "delete from mentors where idMentor=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idMentor));
}

function liste()
    {
        $query = "select * from mentors";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res->fetchAll();
    }

function modifier_user(Mentor $m, $idMentor)
{
$sql = "UPDATE mentors SET  nom=?, prenom=?,email=?,password=? ,sexe=?,age=?,ville=?,niveau=?,specialite=?,domaine=?,poste=?,competence=?  WHERE idMentor=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($m->getNom(),$m->getPrenom(),$m->getEmail(),$m->getPassword(),$m->getSexe(),$m->getAge(),$m->getVille(),$m->getNiveau(),$m->getSpecialite(),$m->getDomaine(),$m->getPoste(),$m->getCompetence(),$idMentor));
}

}
?>