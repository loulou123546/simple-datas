<?php

class Datas {

    private static $config = array(
        "password" => "password",
        "path" => "data/"
    );

    public static function get_ALL ($password, $db) {
        if(self::connect($password)){
            return json_decode(self::get_content($db));
        }
    }

    private static function connect ($password) {
        if(self::$config['password'] === $password){
            return true;
        }
        else {
            return false;
        }
    }

    private static function get_content ($db) {
        if(file_exists(self::$config['path'] . $db . ".json")){
            $file = fopen(self::$config['path'] . $db . ".json");
            $content = fread($file, filesize(self::$config['path'] . $db . ".json"));
            fclose($file);
            return $content;
        }
        else {
            return false;
        }
    }
    private static function set_content ($db, $value = "") {
        $file = fopen(self::$config['path'] . $db . ".json");
        fwrite($file, $value);
        fclose($file);
        return true;
    }



}

?>