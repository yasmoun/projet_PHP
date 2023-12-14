<?php

class Mentor {
private $nom,$prenom,$email,$password,$sexe,$age,$ville,$niveau,$specialite,$domaine,$poste,$competence;
function __construct($nom="",$prenom="",$email="",$password="",$sexe="",$age="",$ville="",$niveau="",$specialite="",$domaine="",$poste="",$competence="") {
	
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    $this->password=$password;
    $this->sexe=$sexe;
    $this->age=$age;
    $this->ville=$ville;
    $this->niveau=$niveau;
    $this->specialite=$specialite;
    $this->domaine=$domaine;
    $this->poste=$poste;
    $this->competence=$competence;
}

public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}
public function getEmail(){
	return $this->email;
}

public function getPassword(){
	return $this->password;
}
public function getSexe(){
	return $this->sexe;
}
public function getAge(){
	return $this->age;
}


public function getVille(){
	return $this->ville;
}
public function getNiveau(){
	return $this->niveau;
}

public function getSpecialite(){
	return $this->specialite;
}
public function getDomaine(){
	return $this->domaine;
}

public function getPoste(){
	return $this->poste;
}
public function getCompetence(){
	return $this->competence;
}


public function setNom($nom){
        $this->nom = $nom;
    }


public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

public function setEmail($email){
        $this->email = $email;
    }

public function setPassword($password){
        $this->password = $password;
    }

public function setSexe($sexe){
        $this->sexe = $sexe;
    }
    public function setAge($age){
        $this->age = $age;
    }
public function setVille($ville){
        $this->ville = $ville;
    }

public function setNiveau($niveau){
        $this->niveau = $niveau;
    }

    public function setSpecialite($specialite){
        $this->specialite = $specialite;
    }

    public function setDomaine($domaine){
        $this->domaine = $domaine;
    }
    public function setPoste($poste){
        $this->poste = $poste;
    }
    
    public function setCompetence($competence){
        $this->competence = $competence;
    }

}?>