<?php
require_once('../controllers/etudiantController.php');
session_start();
$mc=new EtudiantController();
$userID = $_SESSION['user_id'];
$mc->delete($userID) ;
header('Location:interface.html');
