<?php
require_once('../controllers/mentorController.php');
session_start();
$mc=new MentorController();
$userID = $_SESSION['user_id'];
$mc->delete($userID) ;
header('Location:interface.html');
