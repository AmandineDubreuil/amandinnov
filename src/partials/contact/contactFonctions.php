<?php

session_start();
require_once './inc/fonctions.php';
//dd(isset($_POST['submitContact']));
if (isset($_POST['submitContact'])) {
    // extraction des variables
    extract($_POST);
    // vérif si existe
    if (
        isset($nom) && $nom != "" &&
        isset($email) && $email != "" &&
        isset($phone) && $phone != "" &&
        isset($objet) && $objet != "" &&
        isset($message) && $message != ""
    ) {
        $nom = checkXSSPostValue($nom);
        $societe =  checkXSSPostValue($societe);
        $email =  checkXSSPostValue($email);
        $phone =  checkXSSPostValue($phone);
        $objet =  checkXSSPostValue($objet);
        $message =  checkXSSPostValue($message);

        // envoyer le message

        $to = "contact@amandinnov.fr";
        $subject = "Contact Amand'Innov : " . $objet;

        $message = "  
        <p>Vous avez reçu un nouveau message de <strong>" . $nom . "</strong> :</p>
        <br>
        <p><strong>Société :</strong> " . $societe . "</p>
        <p><strong>Nom :</strong> " . $nom . "</p>
        <p><strong>E-mail :</strong> " . $email . "</p>
        <p><strong>Téléphone :</strong> " . $phone . "</p>
        <p><strong>Objet :</strong> " . $objet . "</p>
        <p><strong>message :</strong></p>
        <p>" . $message . "</p>

        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: Nouveau Message amandinnov.fr <nepasrepondre@amandinnov.fr>' . "\r\n";


        $send = mail($to, $subject, $message, $headers);
        // vérification de l'envoi
        if ($send) {
            $info = 'Message Envoyé';
            $color = 'green';
            //  redirectUrl('./');
        } else {
            $info = 'Message non Envoyé';
            $color = 'red';
        }
    } else {
        //si vides
        $info = 'Veuillez remplir tous les champs !';
        $color = "red";
    }

}


// fin
include './partials/contact/contactForm.php';
