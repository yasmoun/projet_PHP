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
        $query = "SELECT * FROM mentors WHERE nom = ? AND password = ?";
        

        $stmt = $databaseConnection->getPDO()->prepare($query);
        $stmt->execute([$name, $pass]);
        $mentor = $stmt->fetch();

        if ($mentor) {
            session_start();
            $_SESSION['user_id'] = $mentor['idMentor'];
            header('Location: page2.php');
            exit;
        } else {
            $query = "SELECT * FROM etudiant WHERE nom = ? AND password = ?";

            $stmt = $databaseConnection->getPDO()->prepare($query);
            $stmt->execute([$name, $pass]);
            $etudiant = $stmt->fetch();

            if ($etudiant) {
                session_start();
                $_SESSION['user_id'] = $etudiant['idEtudiant'];
                header('Location: page3.php');
                exit;
            } else {
                header('Location: login.php?error=Password or Name invalid');
                exit;
            }
        }
    }
}
?>