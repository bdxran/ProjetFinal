<?php
function db_connect() {
	try
	{
		return new PDO('mysql:host=localhost;dbname=ultra_gaming;charset=utf8', 'Login', 'VotreMotDePasse',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
}
?>
