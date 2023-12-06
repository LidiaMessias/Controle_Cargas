<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Listagem de Armazenamento</title>
</head>
<body>

<div class="w3-padding w3-content w3-twothird w3-display-topmiddle w3-margin">
    <h2 class="w3-center w3-win8-blue w3-round-large w3-margin">Listagem de Carga Armazenada</h2>

    <table class="w3-table-all w3-centered" id="tabelaProduto">
        <thead>
            <tr class="w3-center w3-win8-blue">
                <th>Código</th>
                <th>Produto</th>
                <th>Fornecedor</th>
                <th>Quantidade</th>
                <th>Tipo</th>
                <th>Data de Entrada</th>
                <th>Data Limite</th>
                <th>Alerta</th>
            </tr>
        </thead>

        <tbody>
            <?php

            require_once 'conexaoBD.php';

            $sql = "SELECT * FROM produtos";
            $resultado = $conexao->query($sql);
            if ($resultado != NULL) 

                foreach($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>'.$linha['idproduto'].'</td>';
                    echo '<td>'.$linha['produto'].'</td>';
                    echo '<td>'.$linha['fornecedor'].'</td>';
                    echo '<td>'.$linha['quantidade'].'</td>';
                    echo '<td>'.$linha['categoria'].'</td>';
                    echo '<td>'.$linha['dataEntrada'].'</td>';
                    echo '<td>'.$linha['dataLimite'].'</td>';
                    echo '<td id="alerta_' .$linha['idproduto']. '"></td>';
                    echo '</tr>';
                }

                $conexao->close();

            ?>
        </tbody>
    </table>

    <a href="index.php">
        <button class="w3-button w3-win8-blue w3-cell w3-round-large w3-right w3-margin-top">Voltar</button>
    </a>

</div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var linhas = document.querySelectorAll('tr');

            linhas.forEach(function(linha) {
                var celDataLimite = linha.querySelector('td:nth-child(7)');
                var celAlerta = linha.querySelector('[id^="alerta_"]');

                if (celDataLimite) {
                    var dataLimiteCel = celDataLimite.textContent;

                    var dataLimite = new Date(dataLimiteCel);
                    var dataAtual = new Date();
                    var diferencaDias = Math.ceil((dataLimite - dataAtual) / (1000 * 60 * 60 * 24));
                }

                if (diferencaDias <= 2) {
                    celAlerta.classList.add('alerta');
                    celAlerta.style.backgroundColor= 'red';
                    celAlerta.style.color = 'white';
                    celAlerta.textContent = "Atenção! Data Limite muito próxima!";
                }
            });

            var temAlerta = document.querySelector('.alerta');

            if (temAlerta) {
                alert('Existem produtos com menos de 2 dias para a data limite de armazenagem! Verificar');
            }
        });
    
    </script>
</body>
</html>