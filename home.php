<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

    <style>
        label {
            color: #615f5a;
        }

        div.img {
            text-align: center;
        }

    </style>

</head>

<body>
    <?php include_once 'components/menu.php'; ?>
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card bg-success p-2 text-white bg-opacity-75">


                    <div class="card-header">
                        <h4>Igor industria LTDA</h4>
                    </div>


                    <div class="card-body">

                        <p>A Igor Indústria LTDA é uma empresa especializada em materiais de construção, oferecendo soluções equipamentos completos e de alta qualidade para projetos de construção e reforma. Nosso compromisso é oferecer produtos duráveis, eficientes e confiáveis para nossos clientes, sempre focando na segurança e satisfação de todos os envolvidos. Com uma grande variedade de produtos desde blocos e tijolos até ferramentas e materiais elétricos, Procuramos ir ao encontro de todas as necessidades dos nossos clientes, sejam eles profissionais da construção ou consumidores finais.
                        </p>
                        <div class="img">
                            <img src="../Exercicio3/img/construcao.jpeg" alt="Imagem para ilustração" height="340">
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