<?php

class GetController{

    //*Peticiones GET sin filtro

    public function getData($tabla){

        $response = GetModel::getData($tabla);

		if(!empty($response)){

			$json = array(
				'status' => 200,
				'total' => count($response),
				"results" => $response
			);

		}else{

			$json = array(
				'status' => 404,
				"results" => "Not Found"
			);

		}
    
        echo json_encode($json, http_response_code($json["status"]));  
        
        return;

    }


}