
<?php 
		include('db_connexion.php');

	$bd = connexionBaseDeDonnee() ;
	$requete = $bd->prepare('SELECT * FROM listepresence ORDER By Date DESC ') ;
	$requete->execute();
	$liste = $requete->fetchAll() ;
	 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Liste des participants</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
		<nav class="navbar navbar-light bg-light">
    		<div class="navbar-inner">
    			<a href="#" class="navbar-brand"><img width="90" height="30" src="image.webp"></a>
    		</div>
    	</nav>
		<div class="container">
			
    	<h1>Liste des participants</h1>
    	<div class="row justify-content-end">
			<a class="btn btn-outline" href="index.php">Enregitrer un autre participant</a>
		</div>
			
			<table class="table">
				<thead>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Numéro de téléphone </th>
					<th>Adresse Email</th>

				</thead>
				<tbody>
					<?php 
					foreach ($liste as $ligne) {
					 	?>
					 	<tr>
					 		<td><?php echo $ligne['Nom']; ?></td>
					 		<td><?php echo $ligne['Prenom']; ?></td>
					 		<td><?php echo $ligne['Telephone']; ?></td>
					 		<td><?php echo $ligne['Email']; ?></td>
					 	</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
</body>
</html>
