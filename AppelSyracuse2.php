<?php
$s = new Syracuse2(
    n : 5, 
    limite : 10, 
    regle : (fn($n) => $n & 1 == 1 ? 3 * $n + 1 : $n >> 1)
);
$s->afficheTableau();
$nn = ($s->getRegle())(7); // 22
Noyau::echoln('nn=' . $nn);

$s->setRegle(fn($n) => 1);
$s->afficheTableau();



