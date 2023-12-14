<?php
include_once('../database/DatabaseConnection.php');


$databaseConnection = new DatabaseConnection();

if (isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST["name"];
    $pass = $_POST["password"];

    if (empty($name)) {
        header("Location: login.php?error=user name is required");
        exit();
    } else if (empty($pass)) {
        header("Location:login.php?error=password is required");
        exit();
    } else {
        $query = "SELECT * FROM admin WHERE nom = ? AND password = ?";
        

        $stmt = $databaseConnection->getPDO()->prepare($query);
        $stmt->execute([$name, $pass]);
        $admin = $stmt->fetch();

        if ($admin) {
            session_start();
            $_SESSION['user_id'] = $mentor['idMentor'];
            header('Location: admin.php');
            exit;
        } 
    }
}
?>