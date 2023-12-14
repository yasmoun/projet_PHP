<?php
class Message {
private $message,$idMentor,$idEtudiant;
function __construct($message="") {
	
    $this->message=$message;
}

public function getMessage(){
	return $this->message;
}
public function getIdMentor(){
	return $this->idMentor;
}
public function getIdEtudiant(){
	return $this->idEtudiant;
}
public function setMessage($message){
        $this->message = $message;
    }
    public function setIdMentor($idMentor){
        $this->idMentor = $idMentor;
    }
    public function setIdEtudiant($idEtudiant){
        $this->idEtudiant = $idEtudiant;
    }

}?>