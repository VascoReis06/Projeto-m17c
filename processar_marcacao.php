<?php
// Verifica se todos os campos foram preenchidos
if(isset($_POST['horario'], $_POST['empregado'], $_POST['servico'], $_POST['nome'], $_POST['data'])) {

    // Recupera os dados do formulário
    $horario = $_POST['horario'];
    $empregado = $_POST['empregado'];
    $servico = $_POST['servico'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];

    // Conecta ao banco de dados (substitua os valores pelas suas configurações)
    $conexao = new mysqli("localhost", "root", "", "tvr_limpezas");

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro na ligação: " . $conexao->connect_error);
    }

    // Query para inserir os dados na tabela
    $sql = "INSERT INTO marcacao (horario, empregado, servico, nome_cliente, data) VALUES ('$horario', '$empregado', '$servico', '$nome', '$data')";

    // Executa a query
    if ($conexao->query($sql) === TRUE) {
        echo "Marcação realizada com sucesso!";
    } else {
        echo "Erro ao fazer a marcação: " . $conexao->error;
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
} else {
    echo "Todos os campos devem ser preenchidos.";
}
?>
