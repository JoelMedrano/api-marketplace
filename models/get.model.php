<?php

require_once "connection.php";

class GetModel{

    //*Peticiones GET sin filtro

    static public function getData($table){

        $stmt = Connection::connect()->prepare("SELECT * FROM $table");

        $stmt -> exeute();

        return $stmt -> fetchAll();

    }

}