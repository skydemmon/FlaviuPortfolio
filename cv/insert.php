<?php

include('connexion/dbconfig.php');


$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LfEteQZAAAAAMx8c5Bqo1Q2Qw9KJnBKAdy8WebG';
$recaptcha_response = $_POST['reponsecaptcha'];

  $name=strip_tags($_POST['name']);
  $prenom=strip_tags($_POST['prenom']);
  $portable=strip_tags($_POST['portable']);
  $mail=strip_tags($_POST['mail']);
  $message=strip_tags($_POST['message']);
  $portable=strip_tags($_POST['portable']);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$recaptcha_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $recaptcha_secret, 'response' => $recaptcha_response)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $capcharespo = curl_exec($ch);
    curl_close($ch);
    $Reponse = json_decode($capcharespo, true);

    if ($Reponse['score'] >= 0.5) {
        $from = "Dev_Web";
        $to = "skydemmon@gmail.com";
        $subject = "Subject: Client ".$message;
      $message_body = "Vous avez reçu une nouvelle message du: $name \nUtilisant cet adresse mail: $mail \nPortable: $portable \n".
        "Contenu du message:\n$message \nRepondre: $mail \n";
        $headers = "From:" . $from;
        if(empty($name) || empty($mail) || empty($message))
        {
           echo "You did not fill out the required fields.";

        }else if(!empty($name) || !empty($mail) || !empty($message)  && $res['success'] == true ){
                 mail($to,$subject,$message_body, $headers);
        		echo "Votre mail a été bien envoyer!.";
        	}
          	$query = "INSERT INTO `client` (`id_user`, `nom`, `prenom`, `mail`, `portable`, `message`) VALUES (NULL, '$name', '$prenom', '$mail', '$portable', '$message')";
            if (!mysqli_query($dbconnect, $query)) {
                die('An error occurred.');
            }
    } else {
        echo "error";
    }



?>
