
<?php
require_once('../controllers/etudiantController.php');
require_once('../models/Etudiant.php');
session_start();
$mc=new EtudiantController();
$m=new Etudiant();
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
$mc->modifier_user($m,$userID);
header('Location:page3.php');

?>