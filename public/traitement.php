<?php
session_start();
if(isset($_POST['submit'])){
  //extraction des variables
  extract($_POST);
  // Verification de l'existance des variables si elles ne sont pas vides
  if(isset($Nom) && $Nom != "" &&
    isset($Prenom) && $Prenom != "" &&
    isset($email) && $email != "" &&
    isset($sujet) && $sujet != "" &&
    isset($message) && $message != ""){
      // envoyé l'email
      // Le destinataire (votre adresse mail)
      $to = "killianprt240@gmail.com";
      //objet du mail
      $subject = "Vous avez reçu un message de : ".$email;

      $message = "
        <p>Vous avez reçu un message de <strong>".$email."</strong></p>
        <p><strong>Nom : </strong>".$Nom."</p>
        <p><strong>Prénom : </strong>".$Prenom."</p>
        <p><strong>Message : </strong>".$message."</p>
      ";
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0";
      $headers .= "Content-type:text/html;charset=iso-8859-1";

      // More headers
      $headers .= 'From: <'.$email.'>' . "\r\n";

      //envoi du mail
      $send = mail($to,$subject,$message,$headers);
      // Vérification de l'envoi
      if($send){
        $_SESSION['succes_message'] = "message envoyé";
        $color = "green";
        
      } else {
        $info = "message non envoyé";
        $color = "red";
      }

  }else{
    // Si elles sont vides
    $info = "Veuillez remplir tout les champs !";
  }
  header('Location: /');
  exit();
}