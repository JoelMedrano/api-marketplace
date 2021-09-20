<?php 

class PutController{

	//*Peticiones GET con FILTRO
	public function getFilterData($table, $linkTo, $equalTo, $orderBy, $orderMode, $startAt, $endAt){

        $response = GetModel::getFilterData($table, $linkTo, $equalTo, $orderBy, $orderMode, $startAt, $endAt);

        return $response;
        
    }

    //*Peticion PUT para editar datos
    public function putData($table, $data, $id, $nameId){

		$response = PutModel::putData($table, $data, $id, $nameId);

		$return = new PutController();
		$return -> fncResponse($response, "putData");

	}

    //*Respuestas del controlador
    public function fncResponse($response, $method){

		if(!empty($response)){

			$json = array(
				'status' => 200,
				"results" => $response
			);

		}else{

			$json = array(
				'status' => 404,
				"results" => "Not Found",
				'method' => $method
			);

		}

		echo json_encode($json, http_response_code($json["status"]));

		return;

	}

}