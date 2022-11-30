<?php

$evaluer = 12;

$var = match($evaluer) {
    10 => $evaluer * 2,
    11, 12 => $evaluer + 1,
    default => 0
};

echo $var;