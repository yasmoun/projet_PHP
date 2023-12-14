<!DOCTYPE html>
<html> 
    <head> 
        <link rel=stylesheet text=type/css href="./css/1.css">
    </head>
    <body id="b2" style="background-image: url('./images/b.jpg');"> 
<h1 ><u> Admin !</u> </h1><br> <br><br>
<form action="loginnAdmin.php" method="post">
<table id="tab1" width =40% align="center" >
  <tr>
    <td id="td"> Name : </td> <td></td>
  </tr>
  <tr><td></td><td><input type="texte" placeholder="enter name" name="name"></td> </tr>
  <tr>
    <td id="td"> Password : </td><td></td>
  </tr>
  <tr>
    <td></td><td><input type="password" placeholder="enter Password" name="password"><?php if (isset($_GET['error'])){ ?> <p style="text-align: left;color:red;font-size: 11px;"> <?php echo $_GET['error'] ?> </p><?php }?></td>
  </tr>
</table> <br> <br> 
<p style="color:  rgb(128, 126, 126);font-size: small; position: absolute;left: 420px;top: 380px;">Don't have an account? <a href="SignIn.html"> Sign Up </a></p>
<button id="butt1" type="submit" > Log In </button> </form>
     <p id="b" ><u> <a href="interface.html"> back </a> </u></p>
    </body>
</html>