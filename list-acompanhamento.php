<!DOCTYPE html>
<html dir="ltr" lang="pt">

<head>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- CSS da Aplicação -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style-forms.css">
    <style>
        a.btn-default {
            color: white;
        }

        .not-active-aguardando {
            pointer-events: none;
            cursor: default;
            color: #DAA520;
        }

        .not-active-reprovado {
            /* pointer-events: none; */
            /* cursor: default; */
            color: #8B0000;
        }
    </style>
    <?php
    require_once "menus.php";
    require_once "footer.php";

    ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="margin-top: 5rem;">
                <!-- basic table -->
                <div class="row">
                    <div class="col-12" style="font-size: 12pt;margin-top: 40px;" align="center">
                        <div class="card">
                            <div class="page-header">
                                <h3>Registros de Pendências</h3>
                            </div>
                            <div class="table-responsive">
                                <table id="dt_registros" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>Indice</th>
                                            <th>Empresa responsável</th>
                                            <th>Categoria</th>
                                            <th>Sub-categoria</th>
                                            <th>Item</th>
                                            <th>Situação</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // for($i=0;$i<$total_registro;$i++){
                                        //     $id_registro = $dados_registro[$i]['id_registro'];
                                        //     $data_hoje = $dados_registro[$i]['data_hoje'];
                                        //     $carga_aplicada = $dados_registro[$i]['carga_aplicada'];
                                        //     $quantidade_baterias = $dados_registro[$i]['quantidade_baterias'];
                                        //     $tensao_bateria = $dados_registro[$i]['tensao_bateria'];
                                        //     $capacidade_bateria = $dados_registro[$i]['capacidade_bateria'];


                                        //             $data_timestamp1 = strtotime($data_hoje);
                                        //             $data_hoje = date("d/m/Y", $data_timestamp1);


                                        echo "
                                                            <tr>
                                                                <td><a href='form-continuacao.php'>0001</a></td> 
                                                                <td><a href='form-continuacao.php'>ENGEMON</a></td>
                                                                <td><a href='form-continuacao.php'>RETIFICADOR-FCC</a></td>
                                                                <td><a href='form-continuacao.php'>Painel de interface</a></td>
                                                                <td><a href='form-continuacao.php'>Botão</a></td> 
                                                                <td><a href='form-continuacao.php'>Aprovado</a><img class=icone src=aprovado.png></td>

                                                            </tr>

                                                            <tr>
                                                            <td><a href='./consu-registro.php?busca=$' class=not-active-aguardando>0002</a></td> 
                                                            <td><a href='./consu-registro.php?busca=$' class=not-active-aguardando>FM2C</a></td>
                                                            <td><a href='./consu-registro.php?busca=$' class=not-active-aguardando>CLIMATIZAÇÃO</a></td>
                                                            <td><a href='./consu-registro.php?busca=$' class=not-active-aguardando>INVERSOR</a></td>
                                                            <td><a href='./consu-registro.php?busca=$' class=not-active-aguardando>INVERSOR</a></td> 
                                                            <td><a href='./consu-registro.php?busca=$'
                                                            class=not-active-aguardando >Aguardando aprovação</a><img class=icone  src=aguardando.png></td>

                                                        </tr>

                                                        <tr>
                                                        <td><a href='form-reprovacao.php' class=not-active-reprovado>0003</a></td> 
                                                        <td><a href='form-reprovacao.php' class=not-active-reprovado>ENGEMAN</a></td>
                                                        <td><a href='form-reprovacao.php' class=not-active-reprovado>ENERGIA</a></td>
                                                        <td><a href='form-reprovacao.php' class=not-active-reprovado>BATERIA</a></td>
                                                        <td><a href='form-reprovacao.php' class=not-active-reprovado>SEM AUTONOMIA</a></td> 
                                                        <td><a href='form-reprovacao.php' class=not-active-reprovado>Reprovado</a><img class=icone src=rejeitado.png></td>

                                                    </tr>
                                                    ";

                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- apps -->
        <!-- apps -->
        <script src="dist/js/app-style-switcher.js"></script>
        <script src="dist/js/feather.min.js"></script>
        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <script src="assets/extra-libs/c3/d3.min.js"></script>
        <script src="assets/extra-libs/c3/c3.min.js"></script>
        <script src="assets/libs/chartist/dist/chartist.min.js"></script>
        <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
        <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
        <!--This page plugins -->
        <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#dt_registros').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nenhum registro para mostrar.",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de  _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Seguinte",
                    "sLast": "Último"
                }
            }
        });
    });
</script>