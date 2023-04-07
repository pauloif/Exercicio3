<?php  
	include_once 'connect.php';
	include_once 'functions.php';

	switch($_POST['action']){
		case "suppliers";
            unset($_POST['action']);
			# Gravando os dados no banco
			$result = insert("suppliers", $_POST);

			if($result){
				header("location: listaFornecedor.php");
			}else{
				header("location: cadastroFornecedor.php?mgs=error");		
			}
		break;
		case "clients";
            unset($_POST['action']);
			# Gravando os dados no banco
			$result = insert("clients", $_POST);

			if($result){
				header("location: listaCliente.php");
			}else{
				header("location: cadastroCliente.php?mgs=error");		
			}
		break;
	}

?>