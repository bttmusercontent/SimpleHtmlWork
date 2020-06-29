<?php


class DB
{
    /**
     * @return PDO
     */
    public static function con(){
        $db = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }

    /**
     * @param $statement
     * @return mixed
     */
    public static function query($statement){
        $db = self::con();
        return $db->prepare($statement);
    }
}
