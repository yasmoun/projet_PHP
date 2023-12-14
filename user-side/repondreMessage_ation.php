<?php
include("../controllers/mentorController.php");
include("../controllers/etudiantController.php");
include("../controllers/messageControllerM.php");
session_start();
$userID = $_SESSION['user_id'];
$idE=$_POST['idEtudiant'];
$m=$_POST['message'];
$message= new Message();
$message->setIdMentor($userID);
$message->setMessage($m);
$message->setIdEtudiant($idE);
$mC=new MessageControllerM();
$mC->insert($message);
header('Location: boiteMessageEt.php');
?>

