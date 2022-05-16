<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toronto Raptors</title>
    <link rel="stylesheet" type="text/css" href="Inscription_Raptors.css" />
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit-icons.min.js"></script>




</head>

<body>
<header>
    <div style="width: 100%;">
    
    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a href="#">Active</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                </li>
                    <li>
                        <a href="#">Item</a></li>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    <li>
                        <a href="#">Parent</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </div>
</div>
    </header>


<?php

$inscription_erreur = ''; // Message en cas d'erreur du formulaire

// Méthode d'inscription dans la base de données
if (isset($_POST['inscription_submit'])){
	$inscription_nom = htmlspecialchars(trim($_POST['nom'])); // Récupération du "nom"
	$inscription_mail = htmlspecialchars(trim($_POST['mail'])); // Récupération du "prenom"
	$inscription_age = htmlspecialchars(trim($_POST['age'])); // Récupération du "mot de passe 1"
	$inscription_identifiant = htmlspecialchars(trim($_POST['identifiant'])); // Récupération du "mot de passe 2"
    $inscription_mot_de_passe = htmlspecialchars(trim($_POST['mot_de_passe'])); // Récupération du "mot de passe 2"

	if ($inscription_nom && $inscription_mail && $inscription_age && $inscription_identifiant && $inscription_mot_de_passe ){

		if (strlen($inscription_mot_de_passe)>=6){

			

				//$inscription_password1 = md5($inscription_password1); // On crypte le mot de passe
				$c = new mysqli ("localhost","root","","raptors"); // On se connecte à la base de données "situation-1"
				$sql = "INSERT INTO adherent VALUES ('$inscription_nom','$inscription_mail','$inscription_age','$inscription_identifiant','$inscription_mot_de_passe')"; // On créer la requête
				$res = $c->query($sql); // On envoie la requête
				mysqli_close($c); // On ferme la connexion à la base de données "situation-1"

				
				exit;
			

		
		}

		else{

			$inscription_erreur = '<p class="px-4 py-2">Le mot de passe est trop court !</p>';
		}
	}

	else{

		$inscription_erreur = '<p class="px-4 py-2">Veuillez saisir tous les champs !</p>';
	}
}

?>
   <form class="mt-5" method="post" action="inscription_Raptor.php">
					
					
					<input type="text" id="nom" name="nom" placeholder="Votre nom" >

					<input type="text" id="mail" name="mail" placeholder="Votre mail">

                    <input type="int" id="age" name="age" placeholder="Votre age">

                    <input type="text" id="identifiant" name="identifiant" placeholder="Votre identifiant">

					<input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Mot de passe" >

					<input type="submit" id="inscription_submit" name="inscription_submit" value="Inscription" >

					<div class="bg-red-600 mt-3">
						
						<?php echo $inscription_erreur; ?>

					</div>

				</form>
  






</body>

</html>