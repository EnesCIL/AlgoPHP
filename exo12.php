<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG
</p>
<?php
$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

ksort($personnes); // trie par prénom

foreach ($personnes as $prenom => $langue) {
    switch ($langue) {
        case "FRA": $salutation = "Salut"; break;
        case "ENG": $salutation = "Hello"; break;
        case "ESP": $salutation = "Hola"; break;
        default: $salutation = "Salut"; break;
    }
    echo "$salutation $prenom<br>";
}
?>
