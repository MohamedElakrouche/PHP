<?php

function writeSecretSentence(string $firstPartSentence,string $secondPartSentence){

     $secretSentence = $firstPartSentence." s'incline face à ". $secondPartSentence ;

    return $secretSentence;

}

echo writeSecretSentence("le lion","face au soleil");
?>