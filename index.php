<!DOCTYPE html>
<html lang="fr">
    <head>
		
        <meta charset="utf-8" />
        <title>Enregistrement Simplon</title>
				<link rel="stylesheet" href="css/bootstrap.css">
		
    </head>
	
    <body>
    	<nav class="navbar navbar-light bg-light">
    		<div class="navbar-inner">
    			<a href="#" class="navbar-brand"><img width="90" height="30" src="image.webp"></a>
    		</div>
    	</nav>

		<div class="container">
			<?php 
if ( isset($_GET['erreur'])) { ?>
	<div class="alert alert-danger">
		<h4 class="alert-heading">Erreur de saisie !</h4>
		<p>Le nom et le prenom ne doivent contenir que des lettres</p>
		<p class="mb-0">Le numero que des chiffre et pas moins de 10 chiffres </p><br>
		<p class="mb-1">Et veillez respecter la syntaxe du Email </p>
	</div>
<?php }
 ?>	
 				<br><p>Bienvenu sur la page d'enregistrement de simplon, Veillez remplir ce formualaire s'il vous plait</p>
 			
			<form method="post" action="ajout.php" class="needs-validation" novalidate>
			<h1>Formulaire: </h1>
				<div class="form-groupe">
					<label for="Nom">Nom: </label><input type="text" class="form-control" name="nom" id="nom" required />
					<div class="invalid-feedback">vide</div>
				</div>
				<div class="form-groupe">
					<label for="Prenom">Prénom: </label><input type="text" class="form-control" name="prenom" id="prenom" required />
					<div class="invalid-feedback">vide</div>
				</div>
				<div class="form-group">
					<label for="numero">Numéro de téléphone: </label><input type="text" class="form-control" name="numero" id="numero"required />
					<div class="invalid-feedback">vide</div>
				</div>
				<div class="form-group">
					<label for="mail">Adresse email: </label><input type="text" name="mail" class="form-control" id="mail" required />
					<div class="invalid-feedback">vide</div>
				</div>
				<input type="submit" class="btn btn-primary">
		
		</form>
		
		<div class="row justify-content-end">
			<a class="btn btn-outline-success" href="listeParticipants.php">Voir la liste des participants</a>
		</div>
	
		</div>
		
		<script>

(function() {
  'use strict';
  window.addEventListener('load', function() {
    
    var forms = document.getElementsByClassName('needs-validation');
   
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>	
		
    </body>
</html>