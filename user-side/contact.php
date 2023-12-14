<?php
include("../controllers/etudiantController.php");
include("../controllers/mentorController.php");
session_start();
$m = new EtudiantController();
$userID = $_SESSION['user_id'];
$mD = $m->getEtudiant($userID);
$id=$_POST['idMentor'];
$us=new MentorController();
$res=$us->liste();
$r=$us->getMentor($id);
?>
<!DOCTYPE html>
<html> 
    <head> 
        <link rel=stylesheet text=type/css href="./css/1.css">
    </head>
    <body id="b2" style="background-image: url('./images/b.jpg');"> <br><br><br>
<h1 style="font-size:40px"><u> Send message !</u> </h1>
<form method="POST" action="ajoutMessage.php">
<?php if ($mD): ?>
<table id="tab1" width =40% align="center" style="margin-top:90px" >
<tr>
    <td id="td"> Mentor's Name : </td> <td> <input type="text"  value="<?php echo $r['nom'].' '.$r['prenom'] ?>"  readonly> </td>
  </tr>
  <tr>
    <td id="td"> Etudiant's name : </td> <td><input type="text"  value="<?php echo $mD['nom'].' '.$mD['prenom'] ?>" readonly ></td>
  </tr>
  <tr>
    <td id="td">message : </td> <td><textarea style="width:300px" name="message"> </textarea><td>
  </tr>
  <input type="hidden" name="mentor" value="<?php echo $r['idMentor']; ?>">
</table> 
<?php else: ?>
        <p>Error: Etudiant not found.</p>
    <?php endif; ?><br> 
    <form align="center"> <button id="butt2" type="submit"> Send </button> </form>
     <p id="b" ><u> <a href="page3.php"> back </a> </u></p>
    </body>
  </form>
</html>       