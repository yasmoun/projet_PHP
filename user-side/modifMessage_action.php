
<?php
require_once('../controllers/messageController.php');
require_once('../models/Message.php');
$idM = $_POST['idMentor'];
$idE = $_POST['idEtudiant'];
$idMess=$_POST['idMessage'];
$m = new Message();
$mc=new MessageController();
$m->setMessage($_POST['message']);
$mc->modifier_message($m, $idM , $idE,$idMess);
header('Location:boiteMessage.php');

?>