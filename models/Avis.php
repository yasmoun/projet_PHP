<?php
class Avis {
    private $nom, $prenom, $message, $image;

    function __construct($nom = "", $prenom = "", $message = "") {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->message = $message;
        $this->image = ''; // Initialize the image property
    }

    public function getMessage() {
        return $this->message;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getImage() {
        return $this->image;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setImage($image) {
        $this->image = $image;
    }
}