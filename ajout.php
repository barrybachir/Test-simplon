<?php 
	include('db_connexion.php');

	function nettoi_donnees($donnee){
		$donnee = trim($donnee);
		$donnee = htmlspecialchars($donnee);
		return $donnee ;
	}
 $bd = connexionBaseDeDonnee() ;

  	if (preg_match("#^[a-zA-Z]+\$#", $_POST['nom']) AND preg_match("#^[a-zA-Z]+\$#", $_POST['prenom']) ) {
  		$nom = nettoi_donnees($_POST['nom']);
  		$prenom = nettoi_donnees($_POST['prenom']);
  	} 

  	if (preg_match("#^([0-9]{2}[-. ]?){5}\$#", $_POST['numero'])) {
  		$numero = nettoi_donnees($_POST['numero']);
  	} 
  	if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}\$#",$_POST['mail'] )) {
  		$mail = nettoi_donnees($_POST['mail']);
  	} 

  	if (isset($nom) AND isset($prenom) AND isset($numero) AND isset($mail)) {
  	$requete = $bd -> prepare('INSERT INTO listepresence(Nom, Prenom, Telephone, Email ) VALUES(:nom, :prenom, :numero, :mail)') ;
  	$requete->execute([
  	'nom' => $nom,
	'prenom' => $prenom,
	'numero' => $numero,
	'mail' => $mail,]);
	 ?>

	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<nav class="navbar navbar-light bg-light">
    		<div class="navbar-inner">
    			<a href="#" class="navbar-brand"><img width="90" height="30" src="image.webp"></a>
    		</div>
    	</nav>
	<div class="container">
		
		<div class="alert alert-success"><h4 class="alert-heading">Felicitation!</h4> votre Enregistrement a été réussi</div>
		
		<div class="row justify-content-between">
			<a class="btn btn-outline-success" href="index.php">Enregitrer un autre participant</a>
			<a class="btn btn-outline-success" href="listeParticipants.php">Voir la liste des participants</a>
		</div>
	</div>

	<?php }  else{ 
	  header("Location:index.php?erreur=1") ; }  ?>