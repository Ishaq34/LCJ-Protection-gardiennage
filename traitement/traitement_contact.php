<?php

if (!empty($_POST))
{
    extract($_POST);
	$valide = true;


    $nom_contact = str_replace('<', ' ',$_POST['nom_contact']);
    $email_contact = str_replace('<', ' ',$_POST['email_contact']);
    $tel_contact = str_replace('<', ' ',$_POST['tel_contact']);
    $message_contact = str_replace('<', ' ',$_POST['message_contact']);

    $nom_contact = htmlentities($_POST['nom_contact']);
    $email_contact = htmlentities($_POST['email_contact']);
    $tel_contact = htmlentities($_POST['tel_contact']);
    $message_contact = htmlentities($_POST['message_contact']);

    $erreur = '<div class="alert alert-danger mt-5" style="padding: .5rem; text-align: center;" role="alert">
                    Une erreur est survenue ! Remplissez correctement les champs.
                </div>';

    if (empty($nom_contact)) 
    {

        $valide = false;
        echo $erreur_nom = '<div class="alert alert-danger mt-5" style="padding: .5rem; text-align: center;" role="alert">
        Votre nom est invalide ! Remplissez correctement les champs.
    </div>';
    }

    if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email_contact)) 
    {
        echo '<div class="alert alert-danger mt-5" style="padding: .5rem; text-align: center;" role="alert">
                    Votre mail est invalide ! Remplissez correctement les champs.
                </div>';
        exit();

    }
    if (empty($email_contact)) 
    {

        $valide = false;
        echo '<div class="alert alert-danger mt-5" style="padding: .5rem; text-align: center;" role="alert">
                    Votre mail est invalide ! Remplissez correctement les champs.
                </div>';
        exit();
    }

    if (empty($tel_contact) && !preg_match("[0-9\+]",$tel_contact)) 
    {

        $valide = false;
        echo '<div class="alert alert-danger mt-5" style="padding: .5rem; text-align: center;" role="alert">
                    Votre téléphone est invalide ! Remplissez correctement les champs.
                </div>';
        exit();
    }

    if (empty($message_contact)) 
    {

        $valide = false;
        echo '<div class="alert alert-danger mt-5" style="padding: .5rem; text-align: center;" role="alert">
                    Votre message est invalide ! Remplissez correctement les champs.
                </div>';
        exit();
    }
    

    if ($valide===true) 
    {
        ini_set('SMTP','ssl0.ovh.net');

        $to = "ishaq34@hotmail.fr";
        $sujet = $nom_contact." a contacté le site ";
        $message = "<html>
                            <body>
                            <br/>
                                    <span style='width:50px;'>
                                        <img src='assets/img/logo_entier.png'/>
                                    </span>
                                        <p> $nom_contact,</p>
                                            <br />

                                <p> $message_contact </p><br><br>

                                <p> $email_contact | $tel_contact </p>

                            </body>
                            </html> ";

        $headers = "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: $nom_contact <$email_contact> \r\n";
        $headers .= "Reply-To: $email_contact \r\n ";

        $message_contact = wordwrap($message_contact, 70, "\r\n");

        mail($to, $sujet,$message,$headers);
      
              
    }
    else
    {
      echo $erreur ;
    }
    
}