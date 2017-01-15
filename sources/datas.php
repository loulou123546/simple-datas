<?php

class Datas {

    /*************************************
     *                                   *
     *   stockage des données de Datas   *
     *                                   *
     *************************************/
    private static $config = array(
        "password" => "password",
        "path" => "data/"
    );


    /*************************************
     *                                   *
     *          Fonction public          *
     *                                   *
     *************************************/
    public static function get_ALL ($password, $db) {
        if(self::connect($password)){
            return json_decode(self::get_content($db), true);
        }
        else {
            return false;
        }
    }
    public static function set_ALL ($password, $db, $value, $isJSON = false) {
        if(self::connect($password)){
            if($isJSON == true){
                self::set_content($db, $value);
            }
            else {
                self::set_content($db, json_encode($value));
            }
            return true;
        }
        else {
            return false;
        }
    }


    /*************************************
     *                                   *
     *    Allow you to connect on DB     *
     *                                   *
     *************************************/
    private static function connect ($password) {
        if(self::$config['password'] === $password){
            return true;
        }
        else {
            return false;
        }
    }


    /*************************************
     *                                   *
     *   Fonction d'accés au fichiers    *
     *                                   *
     *************************************/
    private static function get_content ($db) {
        if(file_exists(self::$config['path'] . $db . ".json")){
            $file = fopen(self::$config['path'] . $db . ".json", "r");
            $content = fread($file, filesize(self::$config['path'] . $db . ".json"));
            fclose($file);
            return $content;
        }
        else {
            return false;
        }
    }
    private static function set_content ($db, $value = "") {
        $file = fopen(self::$config['path'] . $db . ".json", "w");
        fwrite($file, $value);
        fclose($file);
        return true;
    }




}
?>