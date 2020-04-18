<?php
	//base de données admin
	$database = "eceebay";
	//serveur : localhost, login : root, aucun mot de passe
	$db_handle = mysqli_connect('localhost', 'root', '' );
	$db_found = mysqli_select_db($db_handle, $database);

	$login = isset($_POST["email"])? $_POST["email"] : "";
	$pass = isset($_POST["mdp"])? $_POST["mdp"] : "";

	if($_POST['connexion'])
	{
		//si la BDD existe, prendre l'email et le mdp de l'admin (dans la BDD)
		if($db_found){
			$sql = " SELECT * FROM admin WHERE email LIKE '$login' ";  //un mail dans la BBD est-il égal à la saisie de l'utilisateur ?

			$result = mysqli_query($db_handle,$sql);

			if(mysqli_num_rows($result) ==0)  //s'il n'y a pas de correspondance, afficher "pas de compte existant"
			{
				echo "L'email ne correspond à aucun compte existant";
			}

			else                              //s'il y a correspondance, on récupère les autres infos de la table
			{
				$data = mysqli_fetch_assoc($result);
				 if ($pass == $data['mdp'])            //si le mdp est correct
				 {
					echo "Bienvenue sur le site !";
				 }
				 else
				 {
				 	echo "Mot de passe incorrect";
				 }
			}
		}
	}
?>