<?php
include_once('config.php');

class DatabaseConnection extends Connexion {
    function __construct() {
        parent::__construct();
    }

    // Add a public getter method for $pdo
    public function getPDO() {
        return $this->pdo;
    }
}
?>