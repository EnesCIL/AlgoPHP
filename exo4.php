<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.

</p>

<?php
    $phrase= "Engage le jeu que je le gagne";
    $phraseSansMajuscule= strtolower($phrase);
    // echo $phraseSansMajuscule;
    $phraseSansEspace= str_replace( " ", "", $phraseSansMajuscule);

// VARIABLE QUI VA CONTENIR LA VERSION A LENVERS DE LA PHRASE
    $phraseAlenvers = strrev($phraseSansEspace);
    

// var_dump($phraseAlenvers)


    if($phraseAlenvers == $phraseSansEspace){
        echo "La phrase << $phrase >> est un palindrome";
    }else{
        echo "La phrase << $phrase >> n'est pas un palindrome";}

?>
