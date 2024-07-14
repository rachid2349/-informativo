<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email-newsletter"];

    // Aqui você pode adicionar o código para salvar o email no banco de dados
    // Exemplo simples:
    $arquivo = 'emails.txt'; // Nome do arquivo onde serão salvos os emails

    // Verifica se o arquivo já existe, senão cria
    if (!file_exists($arquivo)) {
        $handle = fopen($arquivo, 'w') or die('Não foi possível criar o arquivo.');
        fclose($handle);
    }

    // Abre o arquivo para escrita e adiciona o email
    $handle = fopen($arquivo, 'a');
    fwrite($handle, "$email\n");
    fclose($handle);

    echo "Inscrição realizada com sucesso!";
}

?>
