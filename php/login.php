<?php
    require_once("connexion.php");

    session_start();
    $connecter = new Connecter();
    $BdD = $connecter->connexion();

    //$connection = mysqli_connect('localhost','root','','ps3');
    $email=$_POST['email1'];
    $password= $_POST['password1'];

    // verification de l'adresse mail.
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "format email incorrect !";

    }else{
        // verification du mail et mdp.
            //$result = mysqli_query($connection,"SELECT * FROM enseignant WHERE email='$email' AND mdp='$password'");
        $resultat = $BdD->query("SELECT * FROM enseignant WHERE email='$email' AND mdp='$password'");
        $data = $resultat->rowCount();
          //$data = mysqli_num_rows($resultat);

        if($data=1){
            echo "Connexion en cours";

        }else{
            echo "Email ou mot de passe incorrect !";
        }
    }

    //$BdD=null;
  //  mysqli_close($connection);
?>
