<?php
include("../controllers/etudiantController.php");
include("../controllers/mentorController.php");
session_start();
$m = new mentorController();
$userID = $_SESSION['user_id'];
$mD = $m->getMentor($userID);
$id=$_POST['idEtudiant'];
$us=new EtudiantController();
$res=$us->liste();
$r=$us->getEtudiant($id);
?>
<!DOCTYPE html>
<html> 
    <head> 
        <link rel=stylesheet text=type/css href="./css/1.css">
    </head>
    <body id="b2" style="background-image: url('./images/b.jpg');"> <br><br><br>
<h1 style="font-size:40px"><u> Respond message !</u> </h1>
<form method="POST" action="repondreMessage_ation.php">
<?php if ($mD): ?>
<table id="tab1" width =40% align="center" style="margin-top:90px" >
<tr>
    <td id="td"> Mentor's Name : </td> <td> <input type="text" value="<?php echo $mD['nom'].' '.$mD['prenom'] ?>"  readonly> </td>
  </tr>
  <tr>
    <td id="td"> Etudiant's name : </td> <td><input type="text"   value="<?php echo $r['nom'].' '.$r['prenom'] ?>" readonly></td>
  </tr>
  <tr>
    <td id="td">message : </td> <td><textarea style="width:300px" name="message"> </textarea><td>
  </tr>
  <input type='hidden' name='idEtudiant' value='<?php echo $r['idEtudiant'] ?>'>
</table> 
<?php else: ?>
        <p>Error: Etudiant not found.</p>
    <?php endif; ?><br> 
    <form align="center"> <button id="butt2" type="submit"> Respond </button> </form>
     <p id="b" ><u> <a href="page2.php"> back </a> </u></p>
    </body>
  </form>
</html>       