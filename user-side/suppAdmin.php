<?php
include("../controllers/mentorController.php");
include("../controllers/etudiantController.php");
$idM=$_POST['idMentor'];
$idE=$_POST['idEtudiant'];
if($idM){
    $mc=new MentorController();
    $mc->delete($idM) ;
    header('Location:admin.php');
}
else if($idE){
        $mc=new EtudiantController();
        $mc->delete($idE) ;
        header('Location:admin.php');
}

?>