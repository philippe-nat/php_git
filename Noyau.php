<?php

class Noyau {
    public static function echoln($s):void {
        echo $s . '<br/>';
    }
    public static function echoErrln($s):void {
        echo '<div style="color:#ff0000">' . $s . '</div><br/>';
    }

}