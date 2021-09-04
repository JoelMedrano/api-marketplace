<?php

class GetController{

    //*Peticiones GET sin filtro

    public function getData($tabla){

        $response = GetModel::getData($tabla);

        $json = array(
            'status'    => 200,
            "result"   => $tabla
        );
    
        echo json_encode($json, http_response_code($json["status"]));        

    }


}