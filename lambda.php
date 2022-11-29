<?php

$liste = ['Jean', 'Arnaud','Gérard', 'Zoé', 'Thérèse'];
sort($liste);
foreach($liste as $elt) echo $elt . ' '; // Arnaud Gérard Jean Thérèse Zoé
usort($liste, fn($e1, $e2) => ($e2 <=> $e1)); 
echo '<br/>';
foreach($liste as $elt) echo $elt . ' '; // Zoé Thérèse Jean Gérard Arnaud
