<?php

class GetController{

    //*Peticiones GET sin filtro
    public function getData($table, $orderBy, $orderMode){

        $response = GetModel::getData($table, $orderBy, $orderMode);

		$return = new GetController();
		$return -> fncResponse($response, "getData");

    }

	//*Peticiones GET con FILTRO
	public function getFilterData($table, $linkTo, $equalTo, $orderBy, $orderMode){

        $response = GetModel::getFilterData($table, $linkTo, $equalTo, $orderBy, $orderMode);

		$return = new GetController();
		$return -> fncResponse($response, "getFilterData");

    }

	//*Peticiones GET tablas relacionadas sin filtro
	public function getRelData($rel, $type, $orderBy, $orderMode){

		$response = GetModel::getRelData($rel, $type, $orderBy, $orderMode);

		$return = new GetController();
		$return -> fncResponse($response, "getRelData");

	}

	//*Peticiones GET tablas relacionadas con filtro
	public function getRelFilterData($rel, $type, $linkTo, $equalTo, $orderBy, $orderMode){

		$response = GetModel::getRelFilterData($rel, $type, $linkTo, $equalTo, $orderBy, $orderMode);

		$return = new GetController();
		$return -> fncResponse($response, "getRelFilterData");

	}

	//*Peticiones GET para el buscador
	public function getSearchData($table, $linkTo, $equalTo, $orderBy, $orderMode){

        $response = GetModel::getSearchData($table, $linkTo, $equalTo, $orderBy, $orderMode);

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