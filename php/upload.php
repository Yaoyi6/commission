<?php

      /*$target_dir = "../archivos/";
      $target_file = $target_dir.basename($_FILES["archivo"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["archivo"]["tmp_name"]);
          if($check !== false) {
          	copy($_FILES["archivo"]['tmp_name'], $target_file);
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
          	copy($_FILES["archivo"]['tmp_name'], $target_file);
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      echo "Hola";*/


      //L'element est un Array, donc on utilise forEach() pour extraer tous les valeurs
    	foreach($_FILES["fileUpLoad"]['tmp_name'] as $key => $tmp_name){
    		//Valider que le fichier existe
    		if($_FILES["fileUpLoad"]["name"][$key]) {
          			$filename = $_FILES["fileUpLoad"]["name"][$key]; //Obtenir Nom original du fichier
          			$source = $_FILES["fileUpLoad"]["tmp_name"][$key]; //Obtenir Nom temporel du fichier

          			$directorio = '../files/'; //Chemin pour garder les fichiers

          			//Valider si le chemin existe, sino on la cree
          			if(!file_exists($directorio)){
          				mkdir($directorio, 0777) or die("Pas possible creer le directory/n");
          			}

          			$dir=opendir($directorio); //Ouvrir le dossier
          			$target_path = $directorio.'/'.$filename; //Signaler le chemin du destination et Nom du fichier

          			//Deplacer et valider que le fichier est chargé
          		  //move_uploaded_file(Origine, destination)
          			if(move_uploaded_file($source, $target_path)) {
          				    echo "Le fichier $filename est gardé!!!...<br>";
                      echo "<p><a href='../onglets/creerReunion_Etape3.html'>continuer</a></p>";
          			} else {
          				    echo "Erreur!!!...<br>";
          			}
          			closedir($dir); //Fermer le dossier destination
    		}
    	}

?>
