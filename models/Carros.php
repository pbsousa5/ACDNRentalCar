<?php include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php') // Para facilitar Includes ?>


<?php

include($root . '/config/config.php');

class Carros{


public function getCarros(){
	try{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM carro"); 
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
		echo json_encode($data);
		}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}

public function getCarroPorId($car_id){
	try{
		$db = getDB();
		$query = "SELECT * FROM carro WHERE car_id = :car_id";
		$query_prep = $db->prepare($query);
		$query_prep->bindParam(':car_id', $car_id, PDO::PARAM_INT); 
		$query_prep->execute();
		$data = $query_prep->fetchAll(PDO::FETCH_OBJ); //User data
		echo json_encode($data);
		}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}


public static function validate($campo){
	if($campo == ''){
		$msg = 'Campos necessarios(Placa, chassi ,modelo, marca, ano ou cor) não informados';
		echo $msg;
		exit;
	}
}


public function insertCarro($formData){
	try{
		$placa = $formData['placa'];
		$chassi = $formData['chassi'];
		$modelo = $formData['modelo'];
		$marca = $formData['marca'];
		$ano = $formData['ano'];
		$cor = $formData['cor'];

		Carros::validate($placa);
		Carros::validate($chassi);
		Carros::validate($modelo);
		Carros::validate($marca);
		Carros::validate($ano);
		Carros::validate($cor);

		$db = getDB();
		$query = 'INSERT INTO carro (chassi,placa,cor,modelo, marca, ano) VALUES(:chassi, :placa, :cor, :modelo, :marca, :ano)';
		$query_prep = $db->prepare($query);
		$data = ['chassi'=>$chassi,'placa'=>$placa,'cor'=>$cor,'modelo'=>$modelo,'marca'=>$marca,'ano'=>$ano];
		$result = $query_prep->execute($data);

		if($result){
			 echo 'Dados cadastrados com sucesso.';
		}else{
			 echo 'Houveram erros ao cadastrar os dados.';
		}

		
	}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}

	}

public function deleteCarro($car_id){
	try{
		$db = getDB();
		$query = "DELETE FROM carro WHERE car_id = :car_id";
		$query_prep = $db->prepare($query);
		$query_prep->bindParam(':car_id', $car_id, PDO::PARAM_INT); 
		$query_prep->execute();
		echo "Carro excluido com sucesso";		
	}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}

	}

public function updateCarro($formData,$car_id){
	try{
		$placa = $formData['placa'];
		$chassi = $formData['chassi'];
		$modelo = $formData['modelo'];
		$marca = $formData['marca'];
		$ano = $formData['ano'];
		$cor = $formData['cor'];
		$db = getDB();

		$query = "UPDATE carro 
				  SET chassi = :chassi,
				  placa = :placa,
				  cor = :cor, 
				  modelo = :modelo,
				  marca = :marca,
				  ano = :ano
				  WHERE car_id = :car_id";

		$query_prep = $db->prepare($query);
		$query_prep->bindParam(':chassi', $chassi, PDO::PARAM_INT);
		$query_prep->bindParam(':placa', $placa, PDO::PARAM_INT);
		$query_prep->bindParam(':cor', $cor, PDO::PARAM_INT);
		$query_prep->bindParam(':modelo', $modelo, PDO::PARAM_INT);
		$query_prep->bindParam(':marca', $marca, PDO::PARAM_INT);
		$query_prep->bindParam(':ano', $ano, PDO::PARAM_INT);
		$query_prep->bindParam(':car_id', $car_id, PDO::PARAM_INT);
		$query_prep->execute();
		echo "Dados alterados com sucesso";		
	}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}

	}
}
