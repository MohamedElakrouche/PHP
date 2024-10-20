<?php

echo "Merci ".$_POST["user_name"]." ".$_POST["user_surname"]." de nous avoir contacté à propos de ". implode($_POST["checklist"])."<br> <br>";
echo "\n Un de nos conseillers vous contactera soit à l'adresse" .$_POST["user_mail"]." ou par téléphone au ".$_POST["user_phone"]." dans les plus brefs délais pour traiter votre demande : <br><br>";
echo  $_POST["user_message"];

?>