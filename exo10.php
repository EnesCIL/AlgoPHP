<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €

</p>

<?php
$montantAPayer = 152;
$montantVerse = 200;
$reste = $montantVerse - $montantAPayer; // 48

// Division entière sans intdiv()
$billets10 = (int)($reste / 10);  // 48 ÷ 10 = 4
$reste = $reste - ($billets10 * 10); // reste 8

$billets5 = (int)($reste / 5);    // 8 ÷ 5 = 1
$reste = $reste - ($billets5 * 5);   // reste 3

$pieces2 = (int)($reste / 2);     // 3 ÷ 2 = 1
$reste = $reste - ($pieces2 * 2);    // reste 1

$pieces1 = $reste; // il reste 1

echo "Montant à payer : $montantAPayer €<br>";
echo "Montant versé : $montantVerse €<br>";
echo "Reste à payer : " . ($montantVerse - $montantAPayer) . " €<br>";
echo "***************************************************<br>";
echo "Rendue de monnaie :<br>";
echo "$billets10 billets de 10 € - $billets5 billet de 5 € - $pieces2 pièce de 2 € - $pieces1 pièce de 1 €<br>";
?>
