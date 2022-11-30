<?php
//https://stitcher.io/blog/php-enums
enum Difficulte2:int {
    case FACILE = 1;
    case MOYEN = 2;
    case DIFFICILE = 3;
    case TRES_DIFFICILE = 4;


    public static function toDiff(string $texte):Difficulte2 {
        return match($texte) {
            'facile' => Difficulte2::FACILE,
            'moyen' => Difficulte2::MOYEN,
            'difficile' => Difficulte2::DIFFICILE,
            'très difficile' => Difficulte2::TRES_DIFFICILE,
            default => throw new Exception("Valeur $texte non reconnue pour une difficulté")
        };
    }
}
