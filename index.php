<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Controle de Armazenamento</title>
</head>
<body>

<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h2 class="w3-center w3-win8-blue w3-round-large w3-margin">Cadastro de Carga</h2>

    <form action="cadastro.php" method="post" class="w3-container">
        <label for="produto">Produto</label>
        <input type="text" name="produto" id="produto" class="w3-input w3-border w3-round-large">

        <label for="fornecedor">Fornecedor</label>
        <input type="text" name="fornecedor" id="fornecedor" class="w3-input w3-border w3-round-large">

        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" class="w3-input w3-border w3-round-large">

        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" class="w3-input w3-border w3-round-large">

        <label for="dataentrada">Data de Entrada</label>
        <input type="date" name="dataentrada" id="dataentrada" class="w3-input w3-border w3-round-large">

        <label for="datalimite">Data Limite</label>
        <input type="date" name="datalimite" id="datalimite" class="w3-input w3-border w3-round-large">

        <button name="btnCadastrar" class="w3-button w3-win8-blue w3-cell w3-round-large w3-right">Cadastrar</button>

    </form>

    <a href="lista.php">
        <button class="w3-button w3-teal w3-cell w3-round-large w3-right w3-margin-top w3-margin-right">Listar Cargas</button>
    </a>
</div>
    
</body>
</html>