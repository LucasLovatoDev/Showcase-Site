<?php
//print_r($_POST);

// Définir les vaiables + mettre valeurs à vide
$name_error = $email_error = $phone_error = "";
$name = $email = $phone = $message = $success = "";

// On envoi le formulaire grâce à la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Nous avons besoin de votre nom";
    }else {
        $name = test_input($_POST["name"]);
        // Vérifie que le nom comporte seulement des lettres des espaces
        if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $name_error = "Seulement des lettres et espaces sont autorisés";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "Nous avons besoin de votre mail";
    }else {
        $email = test_input($_POST["email"]);
        // Vérifie que l'adresse mail est conforme
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Le format du mail est invalide";
        }
    }

    if (empty($_POST["phone"])) {
        $phone_error = "Nous avons besoin de votre numéro de téléphone";
    }else {
        $phone = test_input($_POST["phone"]);
        // Vérifie que le numéro de téléphone est conforme
        if(!preg_match("#(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)#",$phone)) {
            $phone_error = "Le format du numéro de téléphone est invalide";
        }
    }
    //"/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{4}$/i"
    if (empty($_POST["message"])) {
        $message = "";
    }else {
        $message = test_input($_POST["message"]);  
    }

    if ($name_error == '' and $email_error == '' and $phone_error == ''){
        $message_body = '';
        unset($_POST['envoyer']);
        foreach($_POST as $key => $value){
            $message_body .= "$key: $value\n";
        }

        $to = 'bmthfr91@gmail.com';
        $subject = 'Contact pour un devis';
        if (mail($to, $subject, $message)){
            $success = 'Message envoyé, merci de nous contacter!';
            $name = $email = $phone = $message = '';
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>