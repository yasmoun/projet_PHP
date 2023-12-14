<?php
include("../controllers/mentorController.php");
include("../controllers/etudiantController.php");
$n=$_POST["nom"];
$p=$_POST["prenom"];
$e=$_POST["email"];
$pass=$_POST["password"];
$s=$_POST["sexe"];
$a=$_POST["age"];
$v=$_POST["ville"];
$ni=$_POST["niveau"];
$sp=$_POST["specialite"];
$d=$_POST["domaine"];
$po=$_POST["poste"];
$c=$_POST["competences"];
$choix=$_POST['eM'];
if ($choix == "mentor") {
    $mentor = new Mentor();
    $mentor->setNom($n);
    $mentor->setPrenom($p);
    $mentor->setEmail($e);
    $mentor->setPassword($pass);
    $mentor->setSexe($s);
    $mentor->setAge($a);
    $mentor->setVille($v);
    $mentor->setNiveau($ni);
    $mentor->setSpecialite($sp);
    $mentor->setDomaine($d);
    $mentor->setPoste($po);
    $mentor->setCompetence($c);

    $mentorController = new MentorController();
    $mentorController->insert($mentor);

    header('Location: login.php');
} else if ($choix == "etudiant") {
    $etudiant = new Etudiant();
    $etudiant->setNom($n);
    $etudiant->setPrenom($p);
    $etudiant->setEmail($e);
    $etudiant->setPassword($pass);
    $etudiant->setSexe($s);
    $etudiant->setAge($a);
    $etudiant->setVille($v);
    $etudiant->setNiveau($ni);
    $etudiant->setSpecialite($sp);

    $etudiantController = new EtudiantController();
    $etudiantController->insert($etudiant);

    header('Location: login.php');
}
?>