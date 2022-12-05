<?php
$s = new Syracuse1(
    n : 5, 
    limite : 10, 
    regle : (fn($n) => $n & 1 == 1 ? 3 * $n + 1 : $n >> 1)
);
echo 'Affiche de la suite pour n = 5 et règle classique : ';
$s->afficheTableau();
$nn = ($s->getRegle())(7); // 22
Noyau::echoln('nn=' . $nn);

$s->setRegle(fn($n) => 1);
echo 'Changement de règle : terme suivant = 1 : ';
$s->afficheTableau();

$s->setRegle(fn($n) => 2);
echo 'Changement de règle : terme suivant = 2 : ';
$s->afficheTableau();

echo 'Nouveau syracuse pour n = 9, règle compressée : ';
$s2 =  new Syracuse1(9);
$s2->afficheTableau();


