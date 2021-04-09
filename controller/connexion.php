<?php
$host = "localhost";
$user = "lambda";
$pwd = "lambda";
$bdd = "emaux";
	try {
        $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $bdd . '','' . $user . '','' . $pwd);
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        die();
    }
?>