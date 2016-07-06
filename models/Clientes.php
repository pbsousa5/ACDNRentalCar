<?php include($_SERVER['DOCUMENT_ROOT'].'/ACDNRentalCar/config/path.php') // Para facilitar Includes ?>


<?php

include($root . '/config/config.php');

class Clientes{


public function getCliente(){
	try{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM cliente"); 
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
		echo json_encode($data);
	}catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
}

public function countClientes(){
	try{
		$db = getDB();
		$stmt = $db->prepare("SELECT COUNT(cli_id) as clientes FROM  cliente"); 
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
		echo json_encode($data);
		}catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}

public function loginCliente($data)
{
try{

		$email = $data['email'];
		$senha = $data['senha'];

		$db = getDB();
		$stmt = $db->prepare("SELECT cli_id FROM cliente WHERE email=:email AND senha=:senha"); 
		$stmt->bindParam("email", $email,PDO::PARAM_STR) ;
		$stmt->bindParam("senha", $senha,PDO::PARAM_STR) ;
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		$db = null;
		if($count){
			$_SESSION['cli_id']=$data->cli_id; // Storing user session value
			return true;
		}else{
			return false;
		} 
	}
	catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}';
	}

}

public function getDadosCliente($cli_id)
{
try{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM cliente WHERE cli_id=:cli_id"); 
		$stmt->bindParam("cli_id", $cli_id,PDO::PARAM_STR);
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		$db = null;
		if($count){
			echo json_encode($data);
		}else{
			$response = [
				'valid' => 'false',
			];
			echo json_encode($response);
		} 
	}
		catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
}



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
		$query = 'INSERT INTO cliente (nome,sobrenome,aniversario,email,senha) VALUES(:nome,:sobrenome,:aniversario,:email,:senha)';
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

}
