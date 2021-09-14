<?php

class GetController{

    //*Peticiones GET sin filtro
    public function getData($tabla){

        $response = GetModel::getData($tabla);

		$return = new GetController();
		$return -> fncResponse($response, "getData");

    }

	//*Peticiones GET con FILTRO
	public function getFilterData($tabla, $linkTo, $equalTo){

        $response = GetModel::getFilterData($tabla, $linkTo, $equalTo);

		$return = new GetController();
		$return -> fncResponse($response, "getFilterData");

    }

	//*Peticiones GET tablas relacionadas sin filtro
	public function getRelData($rel, $type){

		$response = GetModel::getRelData($rel, $type);

		$return = new GetController();
		$return -> fncResponse($response, "getRelData");

	}

	//*Peticiones GET tablas relacionadas con filtro
	public function getRelFilterData($rel, $type, $linkTo, $equalTo){

		$response = GetModel::getRelFilterData($rel, $type, $linkTo, $equalTo);

		$return = new GetController();
		$return -> fncResponse($response, "getRelFilterData");

	}

	//*Peticiones GET para el buscador
	public function getSearchData($tabla, $linkTo, $equalTo){

        $response = GetModel::getSearchData($tabla, $linkTo, $equalTo);

		$return = new GetController();
		$return -> fncResponse($response, "getSearchData");

    }

	//todo: Respuestas del controlador
	public function fncResponse($response, $method){

		if(!empty($response)){

			$json = array(
				'status'	=> 200,
				'total' 	=> count($response),
				"results" 	=> $response
			);

		}else{

			$json = array(
				'status' 	=> 404,
				"results" 	=> "Not Found",
				"method"	=> $method
			);

		}
    
        echo json_encode($json, http_response_code($json["status"]));  
        
        return;

	}

}