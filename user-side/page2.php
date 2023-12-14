<?php
include("../controllers/mentorController.php");
session_start();
$m = new MentorController();
$userID = $_SESSION['user_id'];
$mD = $m->getMentor($userID);;

?>
<html>
    <head>
        <link rel="stylesheet" href="./css/style3.css">
        <link rel="stylesheet" href="./css/styleguide.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
<div class="desktop-4" style='border-left:solid 3px black;border-right:solid 3px black;border-top:solid 3px black;border-bottom:solid 3px black '>
    
    <div class="frame-14" style='background-color:#2f2f2f'>
    <div class="identite" style='color:ffffff'> <?php echo $mD['nom'].' '.$mD['prenom'] ?> </div>
     
      <span class="logOut" style='color:white;'><i class="fa-solid fa-right-from-bracket"></i><a href="login.php" style='color:white'> Log out</a> </span>
     
     
      <a href="boiteMessageEt.php">
      <svg
        class="arcticons-messages-2"
        width="48"
        height="48"
        viewBox="0 0 48 48"
        fill="white"
        xmlns="http://www.w3.org/2000/svg"
      >
        <g clip-path="url(#clip0_127_39)">
          <path
            d="M6.25 20H32.75M6.25 14H32.75M6.25 26H22.75M36 7H3C2.20435 7 1.44129 7.31607 0.87868 7.87868C0.316071 8.44129 0 9.20435 0 10V30C0 30.7956 0.316071 31.5587 0.87868 32.1213C1.44129 32.6839 2.20435 33 3 33H4.64V40.4L12.9 33H36C36.7956 33 37.5587 32.6839 38.1213 32.1213C38.6839 31.5587 39 30.7956 39 30V10C39 9.20435 38.6839 8.44129 38.1213 7.87868C37.5587 7.31607 36.7956 7 36 7Z"
            stroke="#ffff"
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
      </svg> </a>
      
      
      
    </div>
    <div class="frame-15" style='background-color:#dfe3ee'>
    <?php
        echo "<table class='table' style='  border-bottom: black solid 2px;
        border-top: black solid 6px;border-bottom: black solid 4px;'>
            <tr><td></td></tr>
            <tr><td style=' border-bottom: #706f6f solid 1px; width:200px; color:rgb(158, 9, 158) ;font-weight:bold;font-size:20px'> speciality : </td> <td style=' border-bottom: #706f6f solid 1px'>$mD[specialite]</td><td></td></tr>
            <tr> <td  style=' border-bottom: #706f6f solid 1px; width:200px ; color: rgb(158, 9, 158) ;font-weight:bold;font-size:20px; color: rgb(158, 9, 158) ;font-weight:bold;font-size:20px'> Current position : </td><td style=' border-bottom: #706f6f solid 1px'>$mD[poste]</td><td></td></tr>
            <tr> <td  style=' border-bottom: #706f6f solid 1px; width:200px; color:rgb(158, 9, 158) ;font-weight:bold;font-size:20px'> Professional Field : </td><td style=' border-bottom: #706f6f solid 1px'>$mD[domaine]</td><td></td></tr>
            <tr><td  style=' border-bottom: #706f6f solid 1px; width:200px; color: rgb(158, 9, 158) ;font-weight:bold;font-size:20px'> Skills : </td><td style=' border-bottom: #706f6f solid 1px'>$mD[competence]</td><td></td></tr>
            <tr><td  style=' border-bottom: #706f6f solid 1px; width:200px; color: rgb(158, 9, 158) ;font-weight:bold;font-size:20px'> Level of education : </td><td style=' border-bottom: #706f6f solid 1px'>$mD[niveau]</td><td></td></tr>
            <tr><td  style=' border-bottom: #706f6f solid 1px; width:200px; color: rgb(158, 9, 158) ;font-weight:bold;font-size:20px'> City : </td><td style=' border-bottom: #706f6f solid 1px'>$mD[ville]</td><td  style=' border-bottom: #706f6f solid 1px; width:200px; color: rgb(158, 9, 158);font-weight:bold;font-size:20px'> Email : </td><td style=' border-bottom: #706f6f solid 1px'>$mD[email] </td></tr>
        </table>";
        ?>
        <div><button class="butt3" style="font-size:18px;background-color:#4a64b8;" onclick="location.href='modify.php'" >  Modify </button></div>
        <div><button class="butt4" onclick="return confirmDelete() "  style="font-size:18px;background-color:#4a64b8;" > Delete </button></div>
  </div>
  <script>
        function confirmDelete() {
            if (confirm("Attention! Si vous supprimez vos données, le compte sera supprimé. Êtes-vous sûr de vouloir continuer?")) {
                window.location.href = "supp.php";
            }
          }
    </script>
</body>
</html>