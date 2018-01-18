<?php

  /*require_once('connexion.php');

   $connecter = new Connecter();
   $BdD = $connecter->connexion();

   $resultat = $BdD->prepare("INSERT INTO reunion(date_limite,heure_limite,description,secret,no_com)
                              VALUES(:datel,:heurel,:description,:secret,:no_com)");


   $resultat->bindParam(':datel',$date);
   $resultat->bindParam(':heurel',$heure);
   $resultat->bindParam(':description',$desc);
   $resultat->bindParam(':secret',$check);
   $resultat->bindParam(':no_com',$no_com);

   $date = $_POST['date_fin'];
   $heure = $_POST['heure_fin'];
   $desc = $_POST['description'];
   $check = $_POST['bulletin_secret'];
   $com = $_POST['commission'];

   $no_com = $BdD->prepare('SELECT no_com FROM commission WHERE commission.lib_com = ".$com."');

   $resultat->execute();

                     if($resultat){
                         echo "<br/><br/><b>Une nouvelle réunion est ajouté!!</b>";
                     }
                     else{
                         echo "On n'a pas pu ajouter";
                     }
*/

    /*require_once('connexion.php');

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

          $date = $_POST['date_fin'];
          $heure = $_POST['heure_fin'];
          $desc = $_POST['description'];
          $check = $_POST['bulletin_secret'];
          $com = $_POST['commission'];

          $connecter = new Connecter();
          $BdD = $connecter->connexion();

          $resultat = $BdD->prepare("INSERT INTO reunion(date_limite,heure_limite,description,secret,no_com)
                                    VALUES(:datel,:heurel,:description,:secret,:no_com)");

          $resultat->bindParam(':datel',$date);
          $resultat->bindParam(':heurel',$heure);
          $resultat->bindParam(':description',$desc);
          $resultat->bindParam(':secret',$check);
          $resultat->bindParam(':no_com',$no_com);

          $no_com = $BdD->prepare('SELECT no_com FROM commission WHERE commission.lib_com = ".$com."');
          $resultat->execute();

          if($resultat){
              echo "<br/><br/><b>Une nouvelle réunion est ajouté!!</b>";
          }
          else{
              echo "On n'a pas pu ajouter";
          }

    } else{
        throw new Exception("Error Processing Request", 1);
      }*/


  require_once('connexion.php');
  $connecter = new Connecter();
  $BdD = $connecter->connexion();
  //$BdD = new PDO('mysql:host=localhost;dbname=projet_tutore_s3', 'root', '');

  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $date = $_POST['date_fin'];
    $heure = $_POST['heure_fin'];
    $desc = $_POST['description'];
    $check = $_POST['bulletin_secret'];
    $com = $_POST['commission'].value;

    /*$resultat2 = $BdD->prepare('SELECT no_com FROM commission WHERE commission.lib_com = ":com"');
    $resultat2->bindParam(':com', $com);

    $no_com = $resultat2->execute();*/

    $resultat = $BdD->prepare("INSERT INTO reunion(date_limite,heure_limite,description,secret,no_com)
                              VALUES(:datel,:heurel,:description,:secret,:no_com)");

    $resultat->bindParam(':datel', $date);
    $resultat->bindParam(':heurel', $heure);
    $resultat->bindParam(':description', $desc);
    if (isset($check)){
      $bulletin = '1';
    }
    else {
      $bulletin = '0';
    }


    $resultat->bindParam(':secret', $bulletin);
    $resultat->bindParam(':no_com', $com);

    $resultat->execute();

    if($resultat){
       echo "<br/><br/><b>Une nouvelle réunion est ajouté!!</b>";
    }
    else{
       echo "On n'a pas pu ajouter";
    }

  }/*else{
    throw new Exception("Error Processing Request", 1);
  }*/


  ?>
