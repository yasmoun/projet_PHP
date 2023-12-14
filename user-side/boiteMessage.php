<?php
include("../controllers/etudiantController.php");
include("../controllers/messageController.php");
include("../controllers/messageControllerM.php");
session_start();
$etudiantController = new EtudiantController();
$userID = $_SESSION['user_id'];
$mD = $etudiantController->getEtudiant($userID);
$us=new messageController();
$res=$us->listeMentor($userID);
$mM=new messageControllerM();
$re=$mM->listeMentor($userID);
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
    <span > <a href="boiteMessage.php"><svg
        class="arcticons-messages-2"
        width="48"
        height="48"
        viewBox="0 0 48 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <g clip-path="url(#clip0_127_39)">
          <path
            d="M6.25 20H32.75M6.25 14H32.75M6.25 26H22.75M36 7H3C2.20435 7 1.44129 7.31607 0.87868 7.87868C0.316071 8.44129 0 9.20435 0 10V30C0 30.7956 0.316071 31.5587 0.87868 32.1213C1.44129 32.6839 2.20435 33 3 33H4.64V40.4L12.9 33H36C36.7956 33 37.5587 32.6839 38.1213 32.1213C38.6839 31.5587 39 30.7956 39 30V10C39 9.20435 38.6839 8.44129 38.1213 7.87868C37.5587 7.31607 36.7956 7 36 7Z"
            stroke="#888888"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <ellipse cx="34" cy="11.5" rx="5" ry="4.5" fill="#03A026" />
        </g>
        <defs>
          <clipPath id="clip0_127_39">
            <rect width="48" height="48" fill="white" />
          </clipPath>
        </defs>
      </svg></a> 
   </span>
    </div>
     
     
      
    
  <div style=" width:1300px;background-color:black;color:white;margin-top:50px;height:40px;text-align:center;font-size:30px;font-weight:20px"> List of messages  </div>
  <h5 style="font-size:25px;margin-left:20px;color: #356dfe;">Messages sent : <h5>
    <?php
        foreach($res as $row){
        echo " <form method='POST' action='' id='messageForm_$row[idMessage]'> <table class='table' style=' border-bottom: solid black; '>
            <tr><td class='tdN'> À : Mentor's name :</td><td>$row[nom] $row[prenom] </td><td></td></tr>
            <tr><td class='tdN' >Speciality :</td><td>$row[specialite]</td><td></td></tr>
            <tr><td class='tdN'>Message :</td><td>$row[message]</td><td></td></tr> </table>
            <input type='hidden' name='idMentor' value='$row[idMentor]'><input type='hidden' name='idEtudiant' value='$row[idEtudiant]'>
            <input type='hidden' name='idMessage' value='$row[idMessage]'>
            <div> <button type='submit' name='modify'  onclick='modifyMessage($row[idMessage])' class='butt2'><i class='fa-solid fa-wand-magic-sparkles'></i> Modify message</button><button  onclick='deleteMessage($row[idMessage])' name='delete' type='submit' class='butt3' style='margin-top:-30px'><i class='fa-solid fa-eraser'></i> Delete message  </button> 
          </div></form> "; 
        
        }
         ?>
          <h5 style="font-size:25px;margin-left:20px;color: #356dfe;">Messages Received : <h5>
          <?php
        foreach($re as $row){
        echo "<table class='table' style=' border-bottom: solid black; '>
            <tr><td class='tdN'> De : Mentor's name :</td><td>$row[nom] $row[prenom] </td><td></td></tr>
            <tr><td class='tdN' >Speciality :</td><td>$row[specialite]</td><td></td></tr>
            <tr><td class='tdN'>Message :</td><td>$row[message]</td><td></td></tr> </table>
            <input type='hidden' name='idMentor' value='$row[idMentor]'><input type='hidden' name='idEtudiant' value='$row[idEtudiant]'>
          </div>"; 
        
        }
         ?>
    </div>
    
  </div> <br><br>
  <div class="logOut"><i class="fa-solid fa-right-from-bracket"></i><a href="login.php"> Log out</a> <span style='margin-left:20px'> <a href="page3.php"> back</a></span></div>
  <script>
    function modifyMessage(messageId) {
        document.getElementById('messageForm_' + messageId).action = 'modifierMessage.php';
        document.getElementById('messageForm_' + messageId).submit();
    }

    function deleteMessage(messageId) {
        document.getElementById('messageForm_' + messageId).action = 'suppMessage.php';
        document.getElementById('messageForm_' + messageId).submit();
    }
</script>
</body>
</html>