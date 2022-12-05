<?php
$s = new Syracuse(
    n : 5, 
    limite : 10, 
    regle : (fn($n) => $n & 1 == 1 ? 3 * $n + 1 : $n >> 1)
);
echo 'Affiche de la suite pour n = 5 et règle classique : ';
$s->afficheTableau();
$nn = ($s->getRegle())(7); // 22
Noyau::echoln('nn=' . $nn);

echo 'Nouveau syracuse pour n = 9, règle compressée : ';
$s2 =  new Syracuse(9);
$s2->afficheTableau();

$longueurVol = 50;
$vol = Syracuse::getNFromLongueurVol($longueurVol);
if ($vol == null) Noyau::echoln("Aucun entier trouvé ayant une longueur de vol atteignant $longueurVol");
else Noyau::echoln("La longueur de vol $longueurVol est atteinte par l'entier $vol");

echo 'Nouveau syracuse pour n = 27, règle compressée : ';
$s2 =  new Syracuse(27);
$s2->afficheTableau();

