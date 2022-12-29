<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDP-Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- CSS da Aplicação -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php
    require_once "menus.php";
    require_once "footer.php";
    ?>
    <div class="col-md-12" style="font-size: 12pt;margin-top: 40px;" align="center">
        <div id="page-content-wrapper">

            <div class="container-fluid">
                <div class="page-header">
                    <h3>Cadastrar Pendência</h3>
                </div>
                <form class="form-horizontal col-md-12" method="POST" name="#" action="#" enctype="multipart/form-data">
                    <div class='form-group'>
                        <div class="col-md-3">
                            <label for="nome_responsavel_pendencia">Nome responsável pendência:</label>
                            <input type="text" class="form-control" name="nome_responsavel_pendencia" id="nome_responsavel_pendencia" required="" value="André Guimarães" readonly>
                        </div>

                        <div class="col-md-3">
                            <label for="empresa_responsavel_pendencia">Empresa responsável pendência</label>
                            <select type="select" class="form-control" name="empresa_responsavel_pendencia" id="empresa_responsavel_pendencia" required="">
                                <option value="">ESCOLHA A OPÇÃO</option>
                                <option value="ALPHA">ALPHA</option>
                                <option value="ARTEPLAN">ARTEPLAN</option>
                                <option value="CCN">CCN</option>
                                <option value="CLARO BRASIL">CLARO BRASIL</option>
                                <option value="CLEMAR">CLEMAR</option>
                                <option value="CUMMINS">CUMMINS</option>
                                <option value="EATON">EATON</option>
                                <option value="ENERG">ENERG</option>
                                <option value="ENGEMAN">ENGEMAN</option>
                                <option value="ENGEMON">ENGEMON</option>
                                <option value="FM2C">FM2C</option>
                                <option value="GLOBALSYSTEM">GLOBALSYSTEM</option>
                                <option value="LAFIMONT">LAFIMONT</option>
                                <option value="POLIMOTORES">POLIMOTORES</option>
                                <option value="PROSEL">PROSEL</option>
                                <option value="PSO">PSO</option>
                                <option value="SANRIO">SANRIO</option>
                                <option value="SCHINEIDER">SCHINEIDER</option>
                                <option value="SOB DEMANDA">SOB DEMANDA</option>
                                <option value="SPRINT">SPRINT</option>
                                <option value="VERTIV">VERTIV</option>
                                <option value="CLARO BRASIL OMR">CLARO BRASIL OMR</option>
                                <option value="FRANDOR">FRANDOR</option>
                                <option value="MASTER100">MASTER100</option>
                                <option value="JOHNSON CONTROLS">JOHNSON CONTROLS</option>
                                <option value="SBA">SBA</option>
                                <option value="MGC">MGC</option>
                            </select>
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
                            <select type="select" class="form-control" name="id_cluster" id="id_cluster" required="">
                                <option value="">ESCOLHA O CLUSTER</option>
                                <option value="ESPIRITO SANTO">ESPIRITO SANTO</option>
                                <option value="RIO DE JANEIRO">RIO DE JANEIRO</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="id_sub_cluster">Sub-Cluster</label>
                            <select type="select" class="form-control" name="id_sub_cluster" id="id_sub_cluster" required="">
                                <option value="">ESCOLHA A SUB-CATEGORIA</option>
                                <option value="RIO CAPITAL">RIO CAPITAL</option>
                                <option value="BAIXADA">BAIXADA</option>
                                <option value="SERRANA">SERRANA</option>
                                <option value="SUL FLUMINENSE">SUL FLUMINENSE</option>
                                <option value="NORTE FLUMINENSE">NORTE FLUMINENSE</option>
                                <option value="METROPOLITANA">METROPOLITANA</option>
                                <option value="VITORIA">VITORIA</option>
                                <option value="SERRA">SERRA</option>
                                <option value="VILA VELHA">VILA VELHA</option>
                                <option value="CACHOEIRO">CACHOEIRO</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label for="site">Site</label>
                            <select type="select" class="form-control" name="site" id="site" required="">
                                <option value="">ESCOLHA O SITE</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="criticidade_site">Criticidade Site</label>
                            <select type="select" class="form-control" name="criticidade_site" id="criticidade_site" required="">
                                <option value="">ESCOLHA A CRITICIDADE</option>
                                <option value="ALTO">ALTO</option>
                                <option value="MÉDIO">MÉDIO</option>
                                <option value="BAIXO">BAIXO</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label for="tipo">Tipo de Infra</label>
                            <select type="select" class="form-control" name="tipo" id="tipo" required="">
                                <option value="">ESCOLHA O TIPO</option>
                                <option value="CENTRAL">CENTRAL</option>
                                <option value="ESTAÇÃO">ESTAÇÃO</option>
                                <option value="PPC">PPC</option>
                                <option value="IPRAN">IPRAN</option>
                                <option value="IPRAN">IPRAN + GPON</option>
                                <option value="IPRAN">IPRAN + GPON-F</option>
                                <option value="CDMA">CDMA</option>
                                <option value="GPON">GPON</option>
                                <option value="FOTÔNICO">FOTÔNICO</option>
                                <option value="PONTA">PONTA</option>
                                <option value="CONCENTRADOR">CONCENTRADOR</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label for="equipe">Equipe</label>
                            <select type="select" class="form-control" name="equipe" id="equipe" required="">
                                <option value="">ESCOLHA O TIPO</option>
                                <option value="CLARO">CLARO ELÉTRICA</option>
                                <option value="CLARO">CLARO CLIMATIZAÇÃO</option>
                                <option value="PARCEIRO CLIMATIZADOR">PARCEIRO CLIMATIZAÇÃO</option>
                                <option value="PARCEIRO GERADOR">PARCEIRO GERADOR</option>
                                <option value="PACEIRO CHILLER">PACEIRO CHILLER</option>
                                <option value="PARCEIRO UPS">PARCEIRO UPS</option>
                                <option value="PARCEIRO FCC">PARCEIRO FCC</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label for="grupo">Grupo</label>
                            <select type="select" class="form-control" name="grupo" id="grupo" required="">
                                <option value="">ESCOLHA O GRUPO</option>
                                <option value="EMPRESARIAL">EMPRESARIAL</option>
                                <option value="PESSOAL">PESSOAL</option>
                                <option value="RESIDENCIAL">RESIDENCIAL</option>
                                <option value="NEXTEL">NEXTEL</option>
                                <option value="OI">OI</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="id_categoria">Categoria</label>
                            <select type="select" class="form-control" name="id_categoria" id="id_categoria" required="">
                                <option value="">ESPERANDO DEFINIÇÃO</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="id_sub_categoria">Sub-categoria</label>
                            <select type="select" class="form-control" name="id_sub_categoria" id="id_sub_categoria" required="">
                                <option value="">ESPERANDO DEFINIÇÃO</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="id_item">Item</label>
                            <select type="select" class="form-control" name="id_item" id="id_item" required="">
                                <option value="">ESPERANDO DEFINIÇÃO</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="causa">Causa</label>
                            <select type="select" class="form-control" name="causa" id="causa" required="">
                                <option value="">ESCOLHA A CAUSA</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="relatorio_fotografico">Relatório fotográfico / Orçamento</label>
                            <div class="input-group input-multiple">
                                <input type='file' class='form-control' name='relatorio_fotografico' id='relatorio_fotografico' placeholder='' value="" required="">
                                <a href="#" class="input-group-addon" id="sizing-addon1">+</a>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <label for="pv_proposta">Nº PV / Proposta</label>
                            <input type='text' class='form-control' name='pv_proposta' id='pv_proposta' placeholder='' value="" required="">
                        </div>

                        <div class="col-md-3">
                            <label for="custo">Custo</label>
                            <div class="input-group input-multiple">
                                <input type='text' class='form-control' name='custo' id='custo' placeholder='Automático LPU / SPOT' value="" required="">
                                <a href="#" class="input-group-addon" id="sizing-addon1">Ir ao SCM</a>
                            </div>
                        </div>

                        <div class="col-md-12" style="font-size: 13pt;margin-top: 30px;" align="center">
                            <button type="submit" class="btn btn-success" style="width:20%"><span class="glyphicon glyphicon-ok-sign"></span> Submeter a aprovação</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>