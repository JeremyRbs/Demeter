<?php

$host = "127.0.0.1";
$user = "bypvjjwx_lambda";
$pwd = "LambdaDemeter71";
$bdd = "bypvjjwx_demeter";
	try {
        $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $bdd . '','' . $user . '','' . $pwd);
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        die();
    }
?>