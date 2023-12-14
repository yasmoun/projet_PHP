
<?php
require_once('../controllers/mentorController.php');
require_once('../models/Mentor.php');
session_start();
$mc=new MentorController();
$m=new Mentor();
$userID = $_SESSION['user_id'];

$m->setNom($_POST['nom']);
$m->setPrenom($_POST['prenom']);
$m->setEmail($_POST['email']);
$m->setPassword($_POST['password']);
$m->setSexe($_POST['sexe']);
$m->setAge($_POST['age']);
$m->setVille($_POST['ville']);
$m->setNiveau($_POST['niveau']);
$m->setSpecialite($_POST['specialite']);
$m->setDomaine($_POST['domaine']);
$m->setPoste($_POST['poste']);
$m->setCompetence($_POST['competence']);
$mc->modifier_user($m,$userID);
header('Location:page2.php');

?>