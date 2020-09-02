<?php

class DB {
    private static $conexiune_bd = NULL;
    public static function obtine_conexiune(){
        if (is_null(self::$conexiune_bd))
        {
            self::$conexiune_bd = new PDO('mysql:host=localhost;dbname=itjobs', 'marius', 'marius');
        }
        return self::$conexiune_bd;
    } 
    public static function close(){
        self::$conexiune_bd->close();
    }   
}

?>