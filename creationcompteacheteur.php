<?php
	//base de données admin
	$database = "eceebay";
	//serveur : localhost, login : root, aucun mot de passe
	$db_handle = mysqli_connect('localhost', 'root', '' );
	$db_found = mysqli_select_db($db_handle, $database);

	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
    $email = isset($_POST["email"])? $_POST["email"] : "";
    $motdepasse = isset($_POST["mdp"])? $_POST["mdp"] : "";


    if(isset($_POST['submit'])){
        if($db_found){
            echo 'db found';
            $sql = " SELECT * FROM acheteur WHERE email='$email' LIMIT 1";
            $result = mysqli_query($db_found,$sql);

            if(my_sqli_numrows($result) != 0){
                echo 'E-mail non trouvé, creation du compte.';
                
                $sql = " SELECT FORM acheteur WHERE mdp='$mdp' LIMIT 1";
                $result = mysqli_query($db_found, $sql);

                if(!my_sqli_numrows($result) > 0){
                    echo 'Mot de passe valide.';

                    $sql =" INSERT INTO acheteur (nom, prenom, email, mdp) VALUES ($nom, $prenom, $email, $motdepasse)";
                    $result = mysqli_query($db_found, $sql);
                    
                }
                
                else{
                    echo 'Mot de passe non valide.';
                }
            }
            else{
                    echo 'E-mail déjà utilisé.';
            }
        }      

        else{
            echo 'db not found';
        }
		
        
    }
?>