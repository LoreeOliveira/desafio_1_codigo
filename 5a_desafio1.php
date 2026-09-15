<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Acesso</title>
</head>
<body>

    <form action="" method="post">
        <h2>Verificação de Acesso</h2>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="number" id="ano_nascimento" name="ano_nascimento" min="1900" max="<?php echo date('Y'); ?>" placeholder="Ex: 2005" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $ano_nascimento = (int)$_POST['ano_nascimento'];

        // Calcular a idade com base no ano atual
        $idade = (int)date('Y') - $ano_nascimento;

        // Verificar maioridade
        if ($idade >= 18) {
            echo "<p>Acesso permitido, {$nome}!</p>";

            // Salva os dados em log_acessos.txt
            $arquivo = fopen('log_acessos.txt', 'a');
            $linha = $nome . ';' . $idade . "\n";
            fwrite($arquivo, $linha);
            fclose($arquivo);
        } else {
            echo "<p>Acesso negado, {$nome}!</p>";
        }
    }
    ?>

</body>
</html>
