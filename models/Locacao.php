<?php include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php') // Para facilitar Includes ?>


<?php

include($root . '/config/config.php');

class Locacao{


public function insertLocacao($data){
	try{
		$dataInicio = $data['dataInicio'];
		$dataFim = $data['dataFim'];
		$cli_id = $data['cli_id'];
		$loc_id = $data['loc_id'];
		$car_id = $data['car_id'];

		$db = getDB();
		$query = 'INSERT INTO locacao (data_retirada,data_devolucao,cli_id,loc_id,car_id) VALUES(:dataInicio, :dataFim, :cli_id, :loc_id, :car_id)';
		$query_prep = $db->prepare($query);
		$data = ['dataInicio'=>$dataInicio,'dataFim'=>$dataFim,'cli_id'=>$cli_id,'loc_id'=>$loc_id,'car_id'=>$car_id];
		$result = $query_prep->execute($data);


		if($result){
			 echo 'Carro alugado com sucesso.';
		}else{
			 echo 'Houveram erros ao cadastrar os dados.';
		}

		
	}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}

	}

public function getLocacaoPorId($clienteData){
	try{
		$cli_id = $clienteData['cli_id'];
		$db = getDB();
		$query = 'SELECT *  FROM  carro  INNER JOIN locacao ON  carro.car_id =  locacao.car_id INNER JOIN  cliente ON  cliente.cli_id =:cli_id	 AND  locacao.cli_id =:cli_id';

		$query_prep = $db->prepare($query);
		$query_prep->bindParam(':cli_id', $cli_id, PDO::PARAM_INT); 
		$query_prep->execute();
		$data = $query_prep->fetchAll(PDO::FETCH_OBJ); //User data
		echo json_encode($data);
		}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}

}
