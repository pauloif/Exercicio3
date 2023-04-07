<?php 
    require_once 'connect.php';
    require_once 'functions.php';

    if(isset($_GET['id'])){
        $filter['client_id'] = $_GET['id'];
        $client = select("clients", null, $filter, " LIMIT 1")[0];
    }   
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

    <style>
        label {
            color: #615f5a;
        }

    </style>

</head>

<body>

    <?php include_once 'components/menu.php'; ?>
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card bg-success p-2 text-white bg-opacity-75">


                    <div class="card-header">
                        <h4>Atualizar dados do Cliente</h4>
                    </div>


                    <div class="card-body">
                        <form action="edita.php" method="POST">
                            <div class="mb-2 bg-light text-dark">
                                <div class="card-header text-center text-success">
                                    Dados do Cliente
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-4 offset-1">
                                        <label>Nome Completo:</label>
                                        <input type="text" name="client_name" class="form-control form-control-sm text-primary" placeholder="Digite seu nome completo..." value="<?=$client['client_name'];?>">
                                    </div>
                                    <div class="col-md-3">
                                        <label> Gênero </label>
                                        <select class="form-control form-control-sm text-primary" name="client_gender" value="<?=$client['client_gender'];?>">
                                            <option> Masculino </option>
                                            <option> Feminino </option>
                                            <option> Outros </option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Telefone:</label>
                                        <input type="tel" name="client_phone" class="form-control form-control-sm text-primary" value="<?=$client['client_phone'];?>">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="card mb-2 bg-light text-dark">
                                <div class="card-header text-center text-success">
                                    Informações para contato
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-5 offset-1">
                                        <label>Endereço:</label>
                                        <input type="text" name="client_address" class="form-control form-control-sm text-primary" placeholder="Digite seu endereço..." value="<?=$client['client_address'];?>">
                                    </div>
                                    <div class="col-md-1">
                                        <label>Número:</label>
                                        <input type="text" class="form-control form-control-sm text-primary" name="client_number" value="<?=$client['client_number'];?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Bairro:</label>
                                        <input type="text" class="form-control form-control-sm text-primary" name="client_district" placeholder="Digite seu bairro..." value="<?=$client['client_district'];?>">
                                    </div>
                                    <br>
                                    <div class="col-md-4 offset-1 p-3">
                                        <label>CNPJ/CPF:</label>
                                        <input type="text" class="form-control form-control-sm text-primary" name="client_cnpj" value="<?=$client['client_cnpj'];?>">
                                    </div>
                                    <br>
                                    <div class="col-md-6 offset-0 p-3">
                                        <label>Email:</label>
                                        <input type="email" class="form-control form-control-sm text-primary" name="client_email" value="<?=$client['client_email'];?>">
                                    </div>
                                    <br>
                                    <div class="col-md-10 offset-1">
                                        <label>Observações:</label>
                                        <input type="text" class="form-control form-control-sm text-primary" name="client_comments" placeholder="Descreva mais detalhes" value="<?=$client['client_comments'];?>">
                                    </div>
                                    <input type="hidden" name="client_id" value="<?=$client['client_id'];?>">
                                    <input type="hidden" name="action" value="clients">
                                </div>
                                <br>
                            </div>

                            
                            <button type="submit" class="btn btn-outline-light">Atualizar dados</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Icones -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- Custom Script Table -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable({
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "Não se encontram resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros de 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Carregando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Seguinte",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
        });
    </script>

</body>

</html>