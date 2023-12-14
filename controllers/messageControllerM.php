<?php
include_once('../models/Message.php') ;
include_once('../database/config.php');
class MessageControllerM extends Connexion{
 function __construct() 
{
parent::__construct();
 }
 function insert(Message $m){
 $query="insert into messagesmentor(idMentor,idEtudiant,message)values ( ?, ?, ?)";
$res=$this->pdo->prepare($query); 
$aryy=array($m->getIdMentor(),$m->getIdEtudiant(),$m->getMessage());
return $res->execute($aryy);
 }

 function getMessage($idMentor,$idEtudiant)
    {
        $query = "SELECT * FROM messagesmentor WHERE idMentor = ? AND idEtudiant=? "  ;
        $res = $this->pdo->prepare($query);
        $res->execute(array($idMentor,$idEtudiant));
        return $res->fetch();
    }

function delete($idMentor,$idEtudiant) {
$query = "delete from messagesmentor where idMentor=? and idEtudiant=? ";
$res=$this->pdo->prepare($query);
return $res->execute(array($idMentor,$idEtudiant));
}

function listeMentor($idEtudiant)
    {
        $query = "select m.nom , m.prenom,m.specialite,m.idMentor ,e.idEtudiant, me.message,me.idEtudiant from messagesmentor me join mentors m on m.idMentor=me.idMentor join etudiant e on e.idEtudiant=me.idEtudiant where me.idEtudiant=?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idEtudiant));
        return $res->fetchAll();
    }

    function listeEtudiant($idMentor)
    {
        $query = "select m.idMentor ,e.idEtudiant,e.nom,e.prenom, me.message,me.idMentor from messagesmentor me join mentors m on m.idMentor=me.idMentor join etudiant e on e.idEtudiant=me.idEtudiant  where me.idMentor=?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idMentor));
        return $res->fetchAll();
    }

function modifier_message(Message $m, $idMentor , $idEtudiant)
{
$sql = "UPDATE messagesmentor SET  message=?  WHERE idMentor=? and idEtudiant=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($m->getMessage(),$idMentor,$idEtudiant));
}

}
?>