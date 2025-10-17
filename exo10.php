<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €

</p>

<?php
$montantpayer= 152 ;
$montantVersé= 200;
$reste = ($montantVersé-$montantpayer);
$billet10 = 0;
$billet5 = 0;
$piece2 = 0;
$piece1 = 0;

$i = 1;
while($reste >= 10){
    $reste -=10;   
    $billet10++;
}
if ($reste>= 5){
    $reste -=5;
    $billet5++;
}while($reste >= 2){
    $reste -=2;   
    $piece2++;
}
 
echo "Nombre de billets de 10 : $billet10\n";
echo "Nombre de billets de 5 : $billet5\n";
echo "Nombre de piece de 2 : $piece2\n";
echo "Nombre de piece de 1 : $reste\n";
?>
