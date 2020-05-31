<?php

	$server = 'localhost';
	$username = 'root';
	$password = 'lordTango974';
	$database = 'HabitBuddy';

	try{
		$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
	} catch(PDOException $e){
		echo( "Connection failed: " . $e->getMessage());
	}

include_once 'model/profil.php';
include_once 'model/inscription.php';
include_once 'model/activite.php';

if (isset($_POST['inscription'])) {
	$newInscri = json_decode($_POST['inscription']);
	$pageInscri = new inscription($newInscri->{'nom'},$newInscri->{'prenom'},$newInscri->{'username'},$newInscri->{'mdp'},$newInscri->{'email'});
	$pageInscri->inscri($conn);
}

if (isset($_POST['unProfil'])) {
	$newProfil = json_decode($_POST['unProfil']);
	$poid = $newProfil->{'poid'};
	$code_inscri = $newProfil->{'id'};
	$taille = $newProfil->{'taille'};
	$imc = $newProfil->{'imc'};
	$age = $newProfil->{'age'};
	
	$pageProfil = new profil($code_inscri, $poid, $taille, $imc, $age);
	try {
		$pageProfil->creerProfil($conn);
	} catch (Exception $e) {
		var_dump($e);
	}
}

if (isset($_POST['lesActivites'])) {
	
	$insertActivit = new Activite();
	try {
		$insertActivite->insertActivite($conn, $lesActi);
	} catch (Exception $e) {
		var_dump($e);
	}
}
?>
