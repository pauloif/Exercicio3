<?php

#Conectando ao BD
require_once 'connect.php';
require_once 'functions.php';

$clients = select("clients", null, null, null);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
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
        <div class="col-md-12 offset-0">
            <div class="card bg-success p-2 text-white bg-opacity-75">
                <div class="card-header">
                    <h4>Clientes cadastrados</h4>
                </div>
                <div class="card-body bg-white p-2 text-black bg-opacity-78">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-12 offset-0">
                                <table class="table table-bordered border-success table-sm table-responsive" id="myTable">
                                    <thead class="text-center bg-success bg-opacity-10 text-secondary">
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Gênero</th>
                                        <th>Telefone</th>
                                        <th>Endereço</th>
                                        <th>Núm</th>
                                        <th>Bairro</th>
                                        <th>CNPJ/CPF</th>
                                        <th>Email</th>
                                        <th>Observações</th>
                                        <th>Cadastro</th>
                                        <th width="7%"> Ações </th>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($clients as $client) : ?>

                                            <tr>
                                                <td><?= $client['client_id']; ?></td>
                                                <td><?= $client['client_name']; ?></td>
                                                <td><?= $client['client_gender']; ?></td>
                                                <td><?= $client['client_phone']; ?></td>
                                                <td><?= $client['client_address']; ?></td>
                                                <td><?= $client['client_number']; ?></td>
                                                <td><?= $client['client_district']; ?></td>
                                                <td><?= $client['client_cnpj']; ?></td>
                                                <td><?= $client['client_email']; ?></td>
                                                <td><?= $client['client_comments']; ?></td>
                                                <td width="6%"><?= $client['client_created_in']; ?></td>

                                                <td class="text-center">
                                                    <a href="editaCliente.php?id=<?= $client['client_id']; ?>" class="btn btn-warning btn-sm">
                                                        <span class="iconify" data-icon="mdi:lead-pencil" data-width="17" data-height="17"></span>
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletar-<?= $client['client_id']; ?>">
                                                        <span class="iconify" data-icon="mdi:trash-can-empty" data-width="17" data-height="17"></span>
                                                    </a>
                                                    <!--<button class="btn btn-primary btn-xs">
                                                            <span class="iconify" data-icon="mdi:eye-circle" data-width="16" data-height="16"></span>
                                                        </button>-->

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deletar-<?= $client['client_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">

                                                            <form action="deleta.php" method="POST">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro?</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Deseja excluir o Cliente: <strong style="color: red;"><?= $client['client_name']; ?></strong>? Essa alteração não poderar ser desfeita!
                                                                        <input type="hidden" name="client_id" value="<?= $client['client_id']; ?>">
                                                                        <input type="hidden" name="action" value="clients">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Não, Sair!</button>
                                                                        <button type="submit" class="btn btn-danger">Sim, Excluir!</button>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>
                                    <tfoot class="text-center bg-success bg-opacity-10 text-secondary">
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Gênero</th>
                                        <th>Telefone</th>
                                        <th>Endereço</th>
                                        <th>Núm</th>
                                        <th>Bairro</th>
                                        <th>CNPJ/CPF</th>
                                        <th>Email</th>
                                        <th>Observações</th>
                                        <th>Cadastro</th>
                                        <th> Ações </th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

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
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, 'All'],
                ],

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