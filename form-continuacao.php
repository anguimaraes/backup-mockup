<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDP-mockup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- CSS da Aplicação -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php
    require_once "menus.php";
    ?>
    <div class="col-md-12" style="font-size: 12pt;margin-top: 40px;" align="center">
        <div id="page-content-wrapper">

            <div class="container-fluid">
                <div class="page-header">
                    <h3>Tela de análise da pendência</h3>
                </div>
                <form class="form-horizontal col-md-12" method="POST" name="#" action="#" enctype="multipart/form-data">
                    <div class='form-group'>

                        <div class="col-md-2">
                            <label for="N_pendencia">Nº da Pendência:</label>
                            <input type="text" class="form-control" name="N_pendencia" id="N_pendencia" required="" value="00001" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="nome_responsavel_pendencia">Nome responsável pendência:</label>
                            <input type="text" class="form-control" name="nome_responsavel_pendencia" id="nome_responsavel_pendencia" required="" value="André Guimarães" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="empresa_responsavel_pendencia">Empresa responsável pendência</label>
                            <input type="text" class="form-control" name="empresa_responsavel_pendencia" id="empresa_responsavel_pendencia" required="" value="ENGEMON" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="mes">Mês</label>
                            <input type="text" class="form-control" name="mes" id="mes" required="" value="Dezembro" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="ano">Ano</label>
                            <input type="text" class="form-control" name="ano" id="ano" required="" value="2022" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="data">Data atual</label>
                            <input type='text' class='form-control' name='data' id='data' placeholder='' value="01/12/2022" required="" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="id_cluster">Cluster</label>
                            <input type="text" class="form-control" name="id_cluster" id="id_cluster" required="" value="Rio de Janeiro" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="id_sub_cluster">Sub-Cluster</label>
                            <input type="text" class="form-control" name="id_sub_cluster" id="id_sub_cluster" required="" value="Baixada" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="site">Site</label>
                            <input type="text" class="form-control" name="site" id="site" required="" value="AAS SJ" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="criticidade_site">Criticidade Site</label>
                            <input type="input" class="form-control" name="criticidade_site" id="criticidade_site" required="" value="Médio" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="tipo">Tipo de Infra</label>
                            <input type="text" class="form-control" name="tipo" id="tipo" required="" value="GPON" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="equipe">Equipe</label>
                            <input type="text" class="form-control" name="equipe" id="equipe" required="" value="PARCEIRO FCC" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="grupo">Grupo</label>
                            <input type="text" class="form-control" name="grupo" id="grupo" required="" value="EMPRESARIAL" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="id_categoria">Categoria</label>
                            <input type="text" class="form-control" name="id_categoria" id="id_categoria" required="" value="RETIFICADOR-FCC" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="id_sub_categoria">Sub-categoria</label>
                            <input type="text" class="form-control" name="id_sub_categoria" id="id_sub_categoria" required="" value="Painel de Interface" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="id_item">Item</label>
                            <input type="text" class="form-control" name="id_item" id="id_item" required="" value="Botão" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="causa">Causa</label>
                            <input type="text" class="form-control" name="causa" id="causa" required="" value="Apagado" readonly>
                        </div>



                        <div class="col-md-2">
                            <label for="pv_proposta">Nº PV / Proposta</label>
                            <input type='text' class='form-control' name='pv_proposta' id='pv_proposta' placeholder='' value="01" required="" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="custo">Custo</label>
                            <div class="input-group input-multiple">
                                <span href="#" class="input-group-addon" id="sizing-addon1">R$:</span>
                                <input type='text' class='form-control' name='custo' id='custo' value="xxxx" required="" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 div_pdf">
                            <label for="relatorio_fotografico">Visualizar relatório</label>
                            <a href="#"><img class="img_pdf" src="icone-pdf.svg" alt=""></a>
                        </div>

                        <div class="col-md-12">
                            <label for="o_que_fazer">Descrição do serviço a ser realizado</label>
                            <textarea class='form-control' name='o_que_fazer' id='o_que_fazer' required="required"></textarea>
                        </div>

                        <div class="col-md-3">
                            <label for="aprovado_por">Aprovador por:</label>
                            <input type="text" class="form-control" name="aprovado_por" id="aprovado_por" value="Nome do Gestor que aprovou" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="data_aprovacao">Data Aprovação</label>
                            <input type='text' class='form-control' name='data_aprovacao' id='data_aprovacao' placeholder='' value="02/12/2022" required="" readonly>
                        </div>

                        <div class="col-md-2">
                            <label for="data_planejada">Data planejada</label>
                            <input type='date' class='form-control' name='data_planejada' id='data_planejada' placeholder='' value="" required="">
                        </div>

                        <div class="col-md-2">
                            <label for="data_executada">Data executada</label>
                            <input type='date' class='form-control' name='data_executada' id='data_executada' placeholder='' value="" required="">
                        </div>

                        <div class="col-md-2">
                            <label for="sla_pendencia">SLA Pendência</label>
                            <input type='text' class='form-control' name='sla_pendencia' id='sla_pendencia' placeholder='condição ainda será definida' value="" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="obs">OBS</label>
                            <textarea class='form-control' name='obs' id='obs' required="required"></textarea>
                        </div>

                        <div class="col-md-12" style="font-size: 13pt;margin-top: 30px; margin-bottom: 4rem;" align="center">
                            <button type="submit" class="btn btn-success" style="width:20%">Finalizar<span class="glyphicon glyphicon-ok-sign" style="margin-left: 0.5rem;"></span></button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <?php require_once "footer.php"; ?>

</body>

</html>