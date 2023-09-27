<?php 

     const DB_SERVER = 'localhost'; 
    const DB_USER = 'id21321364_simplon';
    const DB_PASS = 'Bb2003??';
    const DB_NAME = 'id21321364_base_simplon';
 

 function connexionBaseDeDonnee (){

 	try {
 	return	$baseDonnee = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS) ;
 		
 	} catch (Exception $e) {
 	return	die('Erreur : '. $e->getMessage()) ;
 	}
 }

 ?>