<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <title>Sucesso!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            a{
                text-decoration: none;
                color: white;
            }

        </style>
    </head>
<body>

    <div class="container">

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-danger text-center">
                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                        <h4 class="modal-title">Reprovado</h4>
                    </div>
                    <div class="modal-body">
                        <p>Escolha o motivo da reprovação</p>
                    </div>
                    <div class="col-md-6">
                            <select type="select" class="form-control" name="motivo-reprovacao" id="motivo-reprovacao">
                                <option value="">ESCOLHA O MOTIVO</option>
                                <option value="DATA PLANEJAMENTO">DATA PLANEJAMENTO</option>
                                <option value="AGUARDANDO MATERIAL">AGUARDANDO MATERIAL</option>
                                <option value="APRESENTAR PROPOSTA">APRESENTAR PROPOSTA</option>
                                <option value="COBRANCA INDEVIDA">COBRANÇA INDEVIDA</option>
                                <option value="CAPEX">CAPEX</option>
                            </select>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"><a href="list-aprovacao.php">Fechar</a></button>
                    </div>
                </div>

            </div>
        </div>

    </div>

<script type="text/javascript">
    $('#myModal').modal('show')
</script>

</body>

</html>
