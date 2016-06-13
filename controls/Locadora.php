<?php

include('../config/config.php');

class Locadora{


public function getLocadoras(){
	try{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM Locadora"); 
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
		echo json_encode($data);
		}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}

public function getLocadoraPorId($loc_id){
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
	}


public static function validate($campo){
	if($campo == ''){
		$msg = 'Campos necessarios(nome, endereco ,telefone ou email) não informados';
		echo $msg;
		exit;
	}
}


public function insertLocadora($formData){
	try{
		$nome = $formData['nome'];
		$endereco = $formData['endereco'];
		$telefone = $formData['telefone'];
		$email = $formData['email'];

		Locadora::validate($nome);
		Locadora::validate($endereco);
		Locadora::validate($telefone);
		Locadora::validate($email);

		$db = getDB();
		$query = 'INSERT INTO Locadora (nome,endereco,telefone,email) VALUES(:nome, :endereco, :telefone, :email)';
		$query_prep = $db->prepare($query);
		$data = ['nome'=>$nome,'endereco'=>$endereco,'telefone'=>$telefone,'email'=>$email];
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

public function deleteLocadora($loc_id){
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

	}

public function updateLocadora($formData,$loc_id){
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

	}
}

$loc = new Locadora();

if($_SERVER['REQUEST_METHOD']=="POST"){
	if($_POST['type'] == 'get'){
		$loc->getLocadoras();
	}
	if($_POST['type'] == 'getLocadora'){
		$loc_id = $_POST['loc_id'];
		$loc->getLocadoraPorId($loc_id	);
	}
	if($_POST['type'] == 'post'){
		$formData = $_POST;
		$loc->insertLocadora($formData);
	}
	if($_POST['type'] == 'delete'){
		$loc_id = $_POST['loc_id'];
		$loc->deleteLocadora($loc_id);
	}
	if($_POST['type'] == 'put'){
		$formData = $_POST;
		$loc_id = $_POST['loc_id'];
		$loc->updateLocadora($formData,$loc_id);
	}
}

