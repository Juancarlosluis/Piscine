<?php
	//base de données admin
	$database = "eceebay";
	//serveur : localhost, login : root, aucun mot de passe
	$db_handle = mysqli_connect('localhost', 'root', '' );
	$db_found = mysqli_select_db($db_handle, $database);

	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
    $description = isset($_POST["description"])? $_POST["description"] : "";
    $categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
    $prix = isset($_POST["prix"])? $_POST["prix"] : "";
    $photo = isset($_POST["photo"])? $_POST["photo"] : "";
    $video = isset($_POST["video"])? $_POST["video"] : "";

    if(isset($_POST['submit'])){
        if($db_found){
            echo 'db found';         
            $sql =" INSERT INTO objet (nom, description, categorie, prix, photo, video) VALUES ($nom, $description, $categorie, $prix, $photo, $video)";
            $result = mysqli_query($db_found, $sql);
        }      

        else{
            echo 'db not found';
        }
    }
?>