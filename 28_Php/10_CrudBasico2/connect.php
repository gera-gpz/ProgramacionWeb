<?php
$hostname = 'localhost';
$database = 'ejemplo';
$username = 'root';
$password = '';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    //echo 'Conectada a DB';
}
catch(PDOException $e) {
    echo $e->getMessage();
    //echo 'Error';
}
?>