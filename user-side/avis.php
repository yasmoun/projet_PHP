
<?php
include_once('../controllers/avisController.php');
$avisController = new AvisController();
$listeAvis = $avisController->listAvis();
?>
<html>
    <head>
    <link rel="stylesheet" href="css/styleguide.css" />
    <link rel="stylesheet" href="css/1.css" />
    <link rel="stylesheet" href="css/about.css"/>
    <link rel="stylesheet" href="css/avis" />
    </head>
    <body style="background-color: rgb(226, 234, 232);">
        <div class="desktop1" id="bd">
                <div >
                    <span style="color: blue; font-size: 40px;">M</span>
                    <span style="font-size: 30px;">entor</span>
                </div>
                <br><br><br><br><br><br>
                <?php
                if ($listeAvis) {
                    foreach ($listeAvis as $avis) {
                        $imagePath = "../". $avis['image_path'];
                        echo "<table  style='height: 80px; width: 1100px; margin-left: 100px;border-bottom: solid 1px;'>
                        <tr>
                            <td rowspan='2' style='height: 80px; width: 150px;' > <img src='../uploads/" . basename($avis['image_path']) . "' alt='Avis Image' width='100px' height='80px'><br>";
                          echo "  </td> <td> ". $avis['nom']." ".$avis['prenom'] ."</td><tr><td> ". $avis['message'] ."</td></tr> </table> ";}}
                        
                        
                        ?>
    <br>
                <div class="avis" style="font-size:20px ;text-align:center"> <a href="ajoutAvis.html">Add review !</a></div>
                <p style="font-size: 25px;font-weight: bolder;text-align: right;" ><u> <a href="interface.html"> back </a> </u></p>
            </div>
           
        </div>

        
    </body>     