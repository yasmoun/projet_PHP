<?php
include("../controllers/messageController.php");

$idM=$_POST['idMentor'];
$idE=$_POST['idEtudiant'];
$idMe=$_POST['idMessage'];
echo "idMentor: $idM, idEtudiant: $idE, idMessage: $idMe";
$message=new messageController();
$m=$message->delete($idM,$idE,$idMe);
header('Location:boiteMessage.php');
?>