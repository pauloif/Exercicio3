<?php 
    include_once 'connect.php';
	include_once 'functions.php';

    switch($_POST['action']){
        case "suppliers";
            unset($_POST['action']);
            # Atualizando os dados no banco
            $filter['supplier_id'] = $_POST['supplier_id'];
            $result = update("suppliers", $_POST, $filter);

            if($result){
                header("location: listaFornecedor.php");
            }else{
                header("location: cadastroFornecedor.php?mgs=error");		
            }
        break;
        case "clients";
            unset($_POST['action']);
            # Atualizando os dados no banco
            $filter['client_id'] = $_POST['client_id'];
            $result = update("clients", $_POST, $filter);
    
            if($result){
                header("location: listaCliente.php");
            }else{
                header("location: cadastroCliente.php?mgs=error");		
            }
        break;
    }
?>