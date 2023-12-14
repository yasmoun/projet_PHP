<?php
include_once('../models/Avis.php');
include_once('../controllers/avisController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $avis = new Avis();
    $avis->setNom($_POST["nom"]);
    $avis->setPrenom($_POST["prenom"]);
    $avis->setMessage($_POST["message"]);

    $target_dir = "../uploads/"; 
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }


    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";


            $avis->setImage($target_file);


            $etudiantController = new AvisController();


            if ($etudiantController->insert($avis)) {
                header('Location: avis.php');
            } else {
                echo " Error adding review.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>