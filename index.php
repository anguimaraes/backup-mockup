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
    require_once "footer.php";

    ?>
    <h3 class="texto_inicial">Módulo Controle de Pendências - CDP</h3>

    <div class="container borda_redor container_inicial">
        <div class="organiza_botoes">
            <a href="form-inicio.php" class=" botao_inicio btn btn-primary">Iniciar registro da pendência</a>

            <a href="list-acompanhamento.php" class=" botao_inicio btn btn-info">Acompanhamento de pendência</a>

            <a href="list-aprovacao.php" class=" botao_inicio btn btn-warning">Pendências aguardando aprovação</a>

            <a href="atribuir-gestor.php" class=" botao_inicio btn btn-danger">Tela de atribuição de gestor</a>
        </div><p style="margin-left: 100rem; margin-top: -3rem; color: red; width: 50rem;">
            <- este botão será visualizado apenas pelo Milton</p>
    </div>
</body>

</html>