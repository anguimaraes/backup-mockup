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
                    <h3>Motivo da Reprovação</h3>
                </div>

                <div class="col-md-4" style="font-size: 13pt;margin-top: 30px;" align="center">
                            <label for="id_cluster">Reprovador por:</label>
                            <input type="text" class="form-control" name="id_cluster" id="id_cluster" required="" value="CAPEX" readonly>
                        </div>


                        <div class="col-md-12" style="font-size: 13pt;margin-top: 30px;" align="center">
                            <a href="list-acompanhamento.php" type="submit" class="btn btn-danger" style="width:20%">Voltar</a>
                        </div>
    
</body>
</html>