<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, « non imposable »).

</p>
<?php
// $age = 32;
// $sexe = "F"; // F ou M

// if (($sexe == "F" && $age >= 18 && $age <= 35) || ($sexe == "M" && $age > 20)) {
//     $resultat = "imposable";
// } else {
//     $resultat = "non imposable";
// }


// switch case , syntaxe
$age = 35;
$sexe = "F" ;
switch($age) {
    case $sexe == "F" && $age >= 18 && $age <= 35 : echo "$age $sexe imposable<br>"; break;
    case $sexe == "M" && $age > 20: echo "$age $sexe: imposbale<br>"; break;
    default: echo "non imposable<br>";
}



?>
