<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de atribuição de gestor</title>
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
                    <h3>Tela de atribuição de Gestor</h3>
                </div>
                <form class="form-horizontal col-md-12" method="POST" name="#" action="#" enctype="multipart/form-data">
                    <div class='form-group'>
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

                        <div class="col-md-3">
                            <label for="aprovado_por">Gestor Responsável:</label>
                            <select type="select" class="form-control" name="aprovado_por" id="aprovado_por">
                                <option value="">ESCOLHA O GESTOR</option>
                                <option value="VITOR">VITOR</option>
                                <option value="ANDERSON">ANDERSON</option>
                                <option value="WILLIAN">WILLIAN</option>
                                <option value="EVA">EVA</option>
                                <option value="MILTON">MILTON</option>
                                <option value="PERRUT">PERRUT</option>
                                <option value="RAFAEL">RAFAEL</option>
                                <option value="SIMEÃO">SIMEÃO</option>
                                <option value="MAURICIO">MAURICIO</option>
                            </select>
                        </div>

                        <div class="col-md-12" style="font-size: 13pt;margin-top: 30px;" align="center">
                            <button type="submit" class="btn btn-success" style="width:20%">Atribuir ao Gestor<span class="glyphicon glyphicon-ok-sign" style="margin-left: 0.5rem;"></span></button>
                        </div>
    
</body>
</html>