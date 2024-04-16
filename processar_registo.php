<?php
// Verifica se o formulário foi enviado
if(isset($_POST['enviado']) && $_POST['enviado'] == 1){

    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $nif = $_POST['nif'];

    // Conecta ao base de dados (substitua os valores pelas suas configurações)
    $conexao = new mysqli("localhost", "root", "", "tvr_limpezas");

    // Verifica se houve erro na ligação
    if ($conexao->connect_error) {
        die("Erro na ligação: " . $conexao->connect_error);
    }

    // Query para inserir os dados na tabela
    $sql = "INSERT INTO clientes (nome, email, password, nif) VALUES ('$nome', '$email', '$senha', '$nif')";

    // Executa a query
    if ($conexao->query($sql) === TRUE) {
        echo "Registo realizado com sucesso!";
    } else {
        echo "Erro ao registar: " . $conexao->error;
    }

    // Fecha a ligação com o base de dados
    $conexao->close();
}
?>
