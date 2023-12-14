<?php
include_once('../models/Message.php') ;
include_once('../database/config.php');
class MessageController extends Connexion{
 function __construct() 
{
parent::__construct();
 }
 function insert(Message $m){
 $query="insert into messages(idMentor,idEtudiant,message)values ( ?, ?, ?)";
$res=$this->pdo->prepare($query); 
$aryy=array($m->getIdMentor(),$m->getIdEtudiant(),$m->getMessage());
return $res->execute($aryy);
 }

 function getMessage($idMentor,$idEtudiant,$idMessage)
    {
        $query = "SELECT * FROM messages WHERE idMentor = ? AND idEtudiant=? and idMessage=? "  ;
        $res = $this->pdo->prepare($query);
        $res->execute(array($idMentor,$idEtudiant,$idMessage));
        return $res->fetch();
    }

function delete($idMentor,$idEtudiant,$idMessage) {
$query = "delete from messages where idMentor=? and idEtudiant=? and idMessage=?";
$res=$this->pdo->prepare($query);
return $res->execute(array($idMentor,$idEtudiant,$idMessage));
}

function listeMentor($idEtudiant)
    {
        $query = "select m.nom , m.prenom,m.specialite,m.idMentor ,e.idEtudiant, me.message,me.idEtudiant,me.idMessage from messages me join mentors m on m.idMentor=me.idMentor join etudiant e on e.idEtudiant=me.idEtudiant where me.idEtudiant=?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idEtudiant));
        return $res->fetchAll();
    }

    function listeEtudiant($idMentor)
    {
        $query = "select m.idMentor ,e.idEtudiant,e.nom,e.prenom, me.message,me.idMentor,me.idMessage from messages me join mentors m on m.idMentor=me.idMentor join etudiant e on e.idEtudiant=me.idEtudiant where me.idMentor=?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idMentor));
        return $res->fetchAll();
    }

function modifier_message(Message $m, $idMentor , $idEtudiant,$idMessage)
{
$sql = "UPDATE messages SET  message=?  WHERE idMentor=? and idEtudiant=? and idMessage=?";
$stmt= $this->pdo->prepare($sql);
$stmt->execute(array($m->getMessage(),$idMentor,$idEtudiant,$idMessage));
}

}
?>