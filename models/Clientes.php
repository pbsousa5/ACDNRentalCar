<?php include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php') // Para facilitar Includes ?>


<?php

include($root . '/config/config.php');

class Clientes{


public function getCliente(){
	try{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM Cliente"); 
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
		echo json_encode($data);
	}catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
}

/*public function getLocadoraPorId($loc_id){
	try{
		$db = getDB();
		$query = "SELECT * FROM Locadora WHERE loc_id = :loc_id";
		$query_prep = $db->prepare($query);
		$query_prep->bindParam(':loc_id', $loc_id, PDO::PARAM_INT); 
		$query_prep->execute();
		$data = $query_prep->fetchAll(PDO::FETCH_OBJ); //User data
		echo json_encode($data);
		}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}*/


public static function validate($campo){
	if($campo == ''){
		$msg = 'Campos necessarios não informados';
		echo $msg;
		exit;
	}
}


public function insertCliente($formData){
	try{
		$nome = $formData['nome'];
		$sobrenome = $formData['sobrenome'];
		$aniversario = $formData['aniversario'];
		$email = $formData['email'];
		$senha = $formData['senha'];
		$confsenha = $formData['confsenha'];

		foreach ($formData as $campo) {
			Clientes::validate($campo);
		}

		$db = getDB();
		$query = 'INSERT INTO Cliente (nome,sobrenome,aniversario,email,senha) VALUES(:nome,:sobrenome,:aniversario,:email,:senha)';
		$query_prep = $db->prepare($query);
		$data = ['nome'=>$nome,
				'sobrenome'=>$sobrenome,
				'aniversario'=>$aniversario,
				'email'=>$email,
				'senha'=>$senha];
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

/*public function deleteLocadora($loc_id){
	try{
		$db = getDB();
		$query = "DELETE FROM Locadora WHERE loc_id = :loc_id";
		$query_prep = $db->prepare($query);
		$query_prep->bindParam(':loc_id', $loc_id, PDO::PARAM_INT); 
		$query_prep->execute();
		echo "Locadora excluida com sucesso";		
	}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}

	}*/

/*public function updateLocadora($formData,$loc_id){
	try{
		$nome = $formData['nome'];
		$endereco = $formData['endereco'];
		$telefone = $formData['telefone'];
		$email = $formData['email'];
		$db = getDB();

		$query = "UPDATE Locadora 
				  SET nome = :nome,
				  endereco = :endereco,
				  telefone = :telefone, 
				  email = :email 
				  WHERE loc_id = :loc_id";

		$query_prep = $db->prepare($query);
		$query_prep->bindParam(':nome', $nome, PDO::PARAM_INT);
		$query_prep->bindParam(':endereco', $endereco, PDO::PARAM_INT);
		$query_prep->bindParam(':telefone', $telefone, PDO::PARAM_INT);
		$query_prep->bindParam(':email', $email, PDO::PARAM_INT);
		$query_prep->bindParam(':loc_id', $loc_id, PDO::PARAM_INT);
		$query_prep->execute();
		echo "Dados alterados com sucesso";		
	}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}

	}*/
}
