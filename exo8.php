<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la 
forme :

</p>
<?php
$i = 1;
$nombre = 8;

echo "Table de $nombre :<br>";
while ($i <= 10) {
    echo "$i x $nombre = " .($i * $nombre). "<br>";
    $i++;
}
?>
