<?php
class conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=tallerautos",
        "root",
        "");
        $link-> exec("set names utf8");
        return $link;
    }
}
