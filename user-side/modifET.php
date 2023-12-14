<?php
include("../controllers/etudiantController.php");
session_start();
$m = new EtudiantController();
$userID = $_SESSION['user_id'];
$mD = $m->getEtudiant($userID);;
?>
<!DOCTYPE html>
<html> 
    <head> 
        <link rel=stylesheet text=type/css href="./css/1.css">
    </head>
    <body id="b2" style="background-image: url('./images/b.jpg');"> 
<h1 ><u> Modify !</u> </h1>
<form method="POST" action="modifET-action.php">
<?php if ($mD): ?>
<table id="tab1" width =40% align="center" >
<tr>
    <td id="td"> first Name : </td> <td><input type="text" value="<?php echo $mD['nom'] ?>" name="nom"></td>
  </tr>
  <tr>
    <td id="td"> last name : </td> <td><input type="text"  value="<?php echo $mD['prenom'] ?>" name="prenom" ></td>
  </tr>
  <tr>
    <td id="td">Email : </td> <td ><input type="email"  value="<?php echo $mD['email'] ?>" name="email" ></td>
  </tr>
  <tr>
    <td id="td">Password : </td> <td ><input type="password"  value="<?php echo $mD['password'] ?>" name="password" ></td>
  </tr>
  <tr>
    <td id="td"> Sexe : </td>   
    <td>
        <label> male      </label>
        <input type="radio" value="Homme" name="sexe" > 
        <label> female      </label>
        <input type="radio" value="Femme" name="sexe" > 
    </td>
  </tr>
  <tr>
    <td id="td"> age :  </td>
      <td> <input type="text"  value="<?php echo $mD['age'] ?>" name="age"></td>
  </tr>
  <tr>
    <td id="td"> city : </td><td > <input type="text"  value="<?php echo $mD['ville'] ?>" name="ville"></td> 
  </tr>
  <tr>
    <td id="td"> Level of education : </td> <td> <input type="text"  value="<?php echo $mD['niveau'] ?>" name="niveau"> </td>
  </tr>
  <tr>
  <td id="td"> speciality: </td> <td > <input type="text"  value="<?php echo $mD['specialite'] ?>" name="specialite"> </td> 
</tr>
</table> 
<?php else: ?>
        <p>Error: Etudiant not found.</p>
    <?php endif; ?><br> 
    <form align="center"> <button id="butt2" type="submit"> Save Changes </button> </form>
     <p id="b" ><u> <a href="page3.php"> back </a> </u></p>
    </body>
  </form>
</html>       