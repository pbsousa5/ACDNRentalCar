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

public function deleteDetective($did){
	try{
		$db = getDB();
		$query = "DELETE FROM detetives WHERE did = :did";
		$query_prep = $db->prepare($query);
		$query_prep->bindParam(':did', $did, PDO::PARAM_INT); 
		$query_prep->execute();
		echo "Detetive excluido com sucesso";		
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
	if($_POST['type'] == 'post'){
		$formData = $_POST;
		$loc->insertLocadora($formData);
	}
	if($_POST['type'] == 'delete'){
		$did = $_POST['id'];
		$dec->deleteDetective($did);
	}
}

