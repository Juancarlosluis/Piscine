<?php
	//base de données admin
	$database = "eceebay";
	//serveur : localhost, login : root, aucun mot de passe
	$db_handle = mysqli_connect('localhost', 'root', '' );
	$db_found = mysqli_select_db($db_handle, $database);

	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
    $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
    $email = isset($_POST["email"])? $_POST["email"] : "";

    
    if(isset($_POST['submit'])){
        if($db_found){
            echo 'db found';
            $sql = " SELECT * FROM vendeur WHERE pseudo='$pseudo' LIMIT 1";
            $result = mysqli_query($db_found,$sql);

            if(my_sqli_numrows($result) != 0){
                echo 'pseudo non trouvé, creation du compte.';
                
                $sql = " SELECT FORM vendeur WHERE email='$email' LIMIT 1";
                $result = mysqli_query($db_found, $sql);

                if(!my_sqli_numrows($result) > 0){
                    echo 'E-mail valide.';

                    $sql =" INSERT INTO vendeur (nom, prenom,, pseudo, email, mdp) VALUES ($nom, $prenom, $pseudo, $email, $motdepasse)";
                    $result = mysqli_query($db_found, $sql);
                    
                }
                
                else{
                    echo 'E-mail déjà utilisé.';
                }
            }
            else{
                    echo 'Pseudo déjà utilisé.';
            }
        }      

        else{
            echo 'db not found';
        }
		
        
    }
?>