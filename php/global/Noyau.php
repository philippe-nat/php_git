<?php

class Noyau {
    public static function echoln($s):void {
        echo $s . '<br/>';
    }
    public static function echoErrln($s):void {
        echo '<div style="color:#ff0000">' . $s . '</div><br/>';
    }

    public static function echoArray(array $a):void {
        echo '[';
        foreach($a as $elt) echo $elt . ' ';
        echo ']';
    }

    public static function echoArrayLn(array $a):void {
        self::echoArray($a);
        echo '<br/>';
    }

}