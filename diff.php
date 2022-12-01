<?php
include "Difficulte.php";

$d = Difficulte::toDiff('facile');
Noyau::echoln($d->value); // 1
$d = Difficulte::toDiff('moyen');
Noyau::echoln($d->value); // 2
