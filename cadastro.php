<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
    <title>Cadastro de Carga</title>
</head>
<body>
    
    <div class="w3-content w3-text-grey w3-center w3-display-middle">

    <?php

    require_once 'conexaoBD.php';

    $sql = "INSERT INTO produtos (produto, fornecedor, quantidade, categoria, dataEntrada, dataLimite)
            VALUES ('".$_POST['produto']."', '".$_POST['fornecedor']."', '".$_POST['quantidade']."', '".$_POST['tipo']."', '".$_POST['dataentrada']."', '".$_POST['datalimite']."')";

            if ($conexao->query($sql) === TRUE) {
                echo '
                <a href="index.php">
                    <h2 class="w3-button w3-win8-blue w3-round-large">Produto Cadastrado com Sucesso!</h2>
                </a>
                ';
            } else {
                echo '
                <a href="index.php">
                    <h2 class="w3-button w3-win8-blue w3-round-large">Erro ao Cadastrar!</h2>
                </a>
                ';
            }

            $conexao->close();

    ?>

    </div>
</body>
</html>