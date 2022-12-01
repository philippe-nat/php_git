<?php
//https://stitcher.io/blog/php-enums
enum Difficulte:int {
    case FACILE = 1;
    case MOYEN = 2;
    case DIFFICILE = 3;
    case TRES_DIFFICILE = 4;


    public static function toDiff(string $texte):Difficulte {
        return match($texte) {
            'facile' => Difficulte::FACILE,
            'moyen' => Difficulte::MOYEN,
            'difficile' => Difficulte::DIFFICILE,
            'très difficile' => Difficulte::TRES_DIFFICILE,
            default => throw new Exception("Valeur $texte non reconnue pour une difficulté")
        };
    }
}
