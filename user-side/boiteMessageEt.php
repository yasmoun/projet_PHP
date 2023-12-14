<?php
include("../controllers/mentorController.php");
include("../controllers/messageController.php");
include("../controllers/messageControllerM.php");
session_start();
$mentorController = new MentorController();
$userID = $_SESSION['user_id'];
$mD = $mentorController->getMentor($userID);
$us=new messageController();
$res=$us->listeEtudiant($userID);
$mM=new messageControllerM();
$re=$mM->listeEtudiant($userID);
?>
<html>
    <head>
        <link rel="stylesheet" href="./css/styleEtud.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body style="background-color: #dfe3ee">

<div class="frame-1">
  <div class="ellipse-1"></div>
  <div class="ellipse-2"></div>
</div>
<div class="component-2-frame-10">
  <div class="m">M</div>
  <div class="entor">entor</div>
</div>
     <div style="text-align:right; margin-top:20px ;font-size:20px;font-weight:bold;height:20px"> <?php echo $mD['nom'].' '.$mD['prenom'] ?>
    </div>
     
     
      
      
  <div style=" width:1300px;background-color:black;color:white;margin-top:50px;height:40px;text-align:center;font-size:30px;font-weight:20px"> List of messages  </div>
  <h5 style="font-size:25px;margin-left:20px;color: #356dfe;">Messages sent : <h5>
    <?php
        foreach($re as $row){
        echo " <table class='table' style=' border-bottom: solid black; '>
            <tr><td class='tdN'> À : Etudiant's name :</td><td>$row[nom] $row[prenom] </td><td></td></tr>
            <tr><td class='tdN'>Message :</td><td>$row[message]</td><td></td></tr> </table>
            <input type='hidden' name='idMentor' value='$row[idMentor]'><input type='hidden' name='idEtudiant' value='$row[idEtudiant]'>
          </div> "; 
        
        }
         ?>
          <h5 style="font-size:25px;margin-left:20px;color: #356dfe;">Messages Received : <h5>
    <?php
        foreach($res as $row){
        echo " <form method='POST' action='repondreMessage.php'> <table class='table' style=' border-bottom: solid black; '>
            <tr><td class='tdN'> De : Etudiant's name :</td><td>$row[nom] $row[prenom] </td><td></td></tr>
            <tr><td class='tdN'>Message :</td><td>$row[message]</td><td></td></tr> </table>
            <input type='hidden' name='idMentor' value='$row[idMentor]'><input type='hidden' name='idEtudiant' value='$row[idEtudiant]'>
          <div> <button type='submit' class='butt2'><i class='fa-solid fa-wand-magic-sparkles'></i> Respond </button>
          </div></form> "; 
        
        }
         ?>
    </div>
  </div> <br><br>
  <div class="logOut"><i class="fa-solid fa-right-from-bracket"></i><a href="login.php"> Log out</a> <span style='margin-left:20px'> <a href="page2.php"> back</a></span></div>
</body>
</html> 