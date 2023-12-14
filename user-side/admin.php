<?php
include("../controllers/etudiantController.php");
include("../controllers/mentorController.php");
$m = new EtudiantController();
$re=$m->liste();
$us=new MentorController();
$res=$us->liste();
echo "<h1> List of mentors </h1> ";
if (is_array($res) || is_object($res)){
  foreach($res as $row){
  echo " <form method='POST' action='suppAdmin.php'> <table class='table' style=' border-bottom: solid black; '>
      <tr><td class='tdN'>Full name :</td><td>$row[nom] $row[prenom] </td><td></td></tr>
      <tr><td class='tdN' >Speciality :</td><td>$row[specialite]</td><td></td></tr>
      <tr><td class='tdN'>Current post :</td><td>$row[poste]</td><td></td></tr>
      <tr><td class='tdN'>Professional Field :</td><td>$row[domaine]</td><td></td></tr>
      <tr><td class='tdN'>Skills :</td><td>$row[competence]</td><td></td></tr>
      <tr><td class='tdN'> Level of education :</td><td>$row[niveau]</td><td></td></tr>
      <tr><td class='tdN'>City :</td><td>$row[ville]</td><td class='tdN'> Email :</td><td>$row[email] </td></tr>
  </table><input type='hidden' name='idMentor' value='$row[idMentor]'> <button>supprimer</button></form>"; }} 
  echo "<h1> List of etudiants </h1> ";
if (is_array($re) || is_object($re)){
  foreach($re as $row){
  echo " <form method='POST' action='suppAdmin.php'> <table class='table' style=' border-bottom: solid black; '>
      <tr><td class='tdN'>Full name :</td><td>$row[nom] $row[prenom] </td><td></td></tr>
      <tr><td class='tdN' >Speciality :</td><td>$row[specialite]</td><td></td></tr>
      <tr><td class='tdN'> Level of education :</td><td>$row[niveau]</td><td></td></tr>
      <tr><td class='tdN'>City :</td><td>$row[ville]</td><td class='tdN'> Email :</td><td>$row[email] </td></tr>
  </table><input type='hidden' name='idEtudiant' value='$row[idEtudiant]'><button>supprimer</button></form>"; }} 
   ?>
