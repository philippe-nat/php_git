<?php
include_once ('../global/Noyau.php');
$liste = ['Jean', 'Arnaud','Gérard', 'Zoé', 'Thérèse'];
sort($liste);
foreach($liste as $elt) echo $elt . ' '; // Arnaud Gérard Jean Thérèse Zoé
usort($liste, fn($e1, $e2) => ($e2 <=> $e1)); 
Noyau::echoln('');
foreach($liste as $elt) echo $elt . ' '; // Zoé Thérèse Jean Gérard Arnaud

$lambda1 = (fn($x) => ++$x);

lam($lambda1, 4);

function lam(Closure $c, int $x) {
    Noyau::echoln('lambda');
    Noyau::echoln($x); // 4
    Noyau::echoln($c($x)); // 5
}