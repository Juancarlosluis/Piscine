<!DOCTYPE html>
<html>
<head>
	<title>e-bay ECE</title>
	<meta charset="utf-8"/>
	<link href="prime.css" rel="stylesheet" type="text/css" />
	<link href="accueil.css" rel="stylesheet" type="text/css" />
</head>

<div id="content">
        
	<body >
	   
		<h1>Bienvenue sur le site <strong>Ebay ECE</strong></h1>

		<div id="content1">
			<p>Connectez vous à votre compte!</p>

			<form action="" method="post">
			<fieldset>
				<label for="statut">Compte acheteur ou vendeur?</label>
				<select name="statut" >
					<option value="acheteur">acheteur</option>
					<option value="vendeur">vendeur</option>
					<option value="admin">admin</option>
				</select>
                <input type="submit" value="valider">
			</fieldset>
            </form>
            <?php
                $statut = isset($_POST['statut'])? $_POST['statut']:" ";
                echo "votre choix: ";
                echo "$statut";

                switch ($statut) {
                    case ' ':
                        echo "choisissez dans la liste déroulante";
                    break;
                    
                    case 'acheteur':
                        echo '<form action="passe.php" method="post">';
                        echo '<fieldset id="connexion">';
                        echo '  <label for="id">Identifiant</label>';
                        echo '  <input type="text" name="id" value="e-mail">';
                        echo '  <label for="mdp">Mot de passe</label>';
                        echo '  <input type="text" name="mdp" value="mot de passe">';
                        echo '  <input type="submit" name="connexionacheteur" value="connexion">';
                        echo '</fieldset>';
                        echo '</form>';
                        
                        break;
                    case 'vendeur':
                        echo '<form action="passe.php" method="post">';
                        echo '<fieldset id="connexion">';
                        echo '  <label for="id">Pseudo</label>';
                        echo '  <input type="text" name="id" value="pseudo">';
                        echo '  <label for="mdp">E-mail</label>';
                        echo '  <input type="text" name="mdp" value="email">';
                        echo '  <input type="submit" name="connexionvendeur" value="connexion">';
                        echo '</fieldset>';
                        break;

                    case 'admin':
                        echo '<form action="passe.php" method="post">';
                        echo '<fieldset id="connexion">';
                        echo '  <label for="id">E-mail</label>';
                        echo '  <input type="text" name="id" value="E-mail">';
                        echo '  <label for="mdpl">Mot de passe</label>';
                        echo '  <input type="text" name="mdp" value="mot de passe">';
                        echo '  <input type="submit" name="connexionadmin" value="connexion">';
                        echo '</fieldset>';
                        echo '</form>';
                        break;
                }    
            ?>
            <!-- contrainte admin doit y en avoir qu'un seul avec non possibilité d'avoir un compte acheteur ou vendeur avec meme email -->
            
			
			<!-- php qui ouvre
			connexion acheteur, vendeur ou admin
			-->


			
		
			<p>Nouveau sur le site?</p>
			<fieldset>
				<p>Creez un compte en tant qu'acheteur ou vendeur!</p>
				<a href="creationcompteacheteur.html"><input type="button" value="Acheteur"></a>
				<a href="creationcomptevendeur.html"><input type="button" value="Vendeur"></a>
			</fieldset>
		</div>

		<div id="content2">
			<p>Avec notre site d'enchères en ligne, vous pouvez mettre en vente ou acheter de nombreux objets!</p>
			<p>Vous pouvez acheter un produit immédiatement, par enchères ou négocier directement avec le vendeur le prix qui vous convient.</p>

		</div>

	</body>
</div>
</body>
</html>
