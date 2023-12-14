<?php
include("../controllers/etudiantController.php");
include("../controllers/mentorController.php");
include("../controllers/messageController.php");

$idM=$_POST['idMentor'];
$idE=$_POST['idEtudiant'];
$idMe=$_POST['idMessage'];
$us=new MentorController();
$r=$us->getMentor($idM);
$us=new EtudiantController();
$re=$us->getEtudiant($idE);
$message=new messageController();
$m=$message->getMessage($idM,$idE,$idMe);
?>
<!DOCTYPE html>
<html> 
    <head> 
        <link rel=stylesheet text=type/css href="./css/1.css">
    </head>
    <body id="b2" style="background-image: url('./images/b.jpg');"> <br><br><br>
<h1 style="font-size:40px"><u> Modify message !</u> </h1>
<form method="POST" action="modifMessage_action.php">
<table id="tab1" width =40% align="center" style="margin-top:90px" >
<tr>
    <td id="td"> Mentor's Name : </td> <td> <input type="text"  value="<?php echo $r['nom'].' '.$r['prenom'] ?>"  readonly> </td>
  </tr>
  <tr>
    <td id="td"> Etudiant's name : </td> <td><input type="text"  value="<?php echo $re['nom'].' '.$re['prenom'] ?>"  readonly></td>
  </tr>
  <tr>
    <td id="td">message : </td> <td><textarea style="width:300px" name="message" ><?php echo $m['message']?> </textarea> <td>
  </tr>
</table> 
<input type='hidden' name='idMentor' value='<?php echo $idM ?>'><input type='hidden' name='idEtudiant' value='<?php echo $idE ?>'>
<input type='hidden' name='idMessage' value='<?php echo $idMe ?>'>
<br> 
    <form align="center"> <button id="butt2" type="submit"> Modify </button> </form>
     <p id="b" ><u> <a href="page3.php"> back </a> </u></p>
    </body>
  </form>
</html>       