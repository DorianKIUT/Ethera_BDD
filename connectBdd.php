<?php
//connection à la BDD
$hostname = "localhost";
$username = "root";
$password = "lpdip:17";
$dbname = "Ethera";
$bdd =null;

// Connection à la bdd
try {
    $bdd = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
