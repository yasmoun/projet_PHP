<?php
include_once('../models/Avis.php');
include_once('../database/config.php');

class AvisController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function insert(Avis $e) {
        $query = "INSERT INTO avis (nom, prenom, message, image_path) VALUES (?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        
        $target_file = "../uploads/" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $aryy = array($e->getNom(), $e->getPrenom(), $e->getMessage(), $target_file);
        return $res->execute($aryy);
    }

    function listAvis() {
        $query = "SELECT * FROM avis";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
}
?>