<?php

class Etudiant {
private $nom,$password;
function __construct($nom="",$password="") {
	
    $this->nom=$nom;
    $this->password=$password;

}

public function getNom(){
	return $this->nom;
}

public function getPassword(){
	return $this->password;
}


public function setNom($nom){
        $this->nom = $nom;
    }



public function setPassword($password){
        $this->password = $password;
    }


}?>