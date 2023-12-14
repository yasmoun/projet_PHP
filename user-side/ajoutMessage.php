<?php
include("../controllers/mentorController.php");
include("../controllers/etudiantController.php");
include("../controllers/messageController.php");
session_start();
$m = new MessageController();
$userID = $_SESSION['user_id'];
$nM=$_POST['mentor'];
$m=$_POST['message'];
$message= new Message();
$message->setIdMentor($nM);
$message->setMessage($m);
$message->setIdEtudiant($userID);
$mC=new MessageController();
$mC->insert($message);
header('Location: page3.php');
?>
