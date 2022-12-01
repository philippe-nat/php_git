<?php
$s = new Syracuse2(
    n : 5, 
    limite : 10, 
    regle : (fn($n) => $n & 1 == 1 ? 3 * $x + 1 : $n >> 1)
);
$s->afficheTableau();

