<?php
// Conexão com o banco de dados (substitua as credenciais e o nome do banco de dados conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tvr_limpezas";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos foram preenchidos
    if (isset($_POST['data'], $_POST['horario'], $_POST['empregado'], $_POST['servico'], $_POST['nome'])) {
        // Recupera os valores enviados pelo formulário
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        $empregado = $_POST['empregado'];
        $servico = $_POST['servico'];
        $nome = $_POST['nome'];

        // Insere os dados na base de dados
        $sql = "INSERT INTO marcacao (data, horario, empregado, servico, nome) VALUES ('$data', '$horario', '$empregado', '$servico', '$nome')";

        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Erro ao adicionar marcação: " . $conn->error;
        }
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
    
    <style>
        .dropdown-content {
            display: none;
        }
        .dropdown-content.show {
            display: block;
        }

        .container {
          max-width: 600px;
          margin: 0 auto;
          background-color: #fff;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        select, #empregados, #servicos {
          width: 100%;
          padding: 10px;
          font-size: 16px;
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        input[type="text"] {
          width: 100%;
          padding: 10px;
          font-size: 16px;
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        button {
          width: 100%;
          padding: 10px;
          font-size: 16px;
          cursor: pointer;
          background-color: #26a9bb;
          color: white;
          border: none;
          border-radius: 4px;
          transition: background-color 0.3s;
        }
        button:hover {
          background-color: #2b68be;
        }
        table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
        }
        th, td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: center;
        }
        th {
          background-color: #f2f2f2;
        }
        tr:nth-child(even) {
          background-color: #f9f9f9;
        }
        tr:hover {
          background-color: #f2f2f2;
        }

        input[type="date"] {
          width: 100%;
          padding: 10px;
          font-size: 16px;
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          /* Adicionando estilo personalizado */
          background-color: #ffffff;
          color: #555555;
          border: 1px solid #999999;
          border-radius: 6px;
          outline: none;
          transition: border-color 0.2s;
      }

      input[type="date"]:focus {
          border-color: #26a9bb; /* Altere a cor para combinar com o tema do seu site */
      }
    </style>

</head>
<header>
    <div class="navbar">
        <div class="logo">
            <img src="img/logo2.png" alt="">
        </div>
        <ul class="links">
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li class="servicos-links"><a href="servicos.php" onclick="toggleDropdown()">Serviços</a></li>
            <li><a href="marcacoes.php">Marcações</a></li>
            <li><a href="contatos.php">Contatos</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>

        <div class="dropdown-menu">
            <ul class="dropdown-content">
                <li><a href="servico1.php">Serviço 1</a></li>
                <li><a href="servico2.php">Serviço 2</a></li>
                <li><a href="servico3.php">Serviço 3</a></li>
            </ul>
        </div>
    </div>
</header>
<br>
<br>
<br>
<br>
<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="data">Selecione a data:</label>
    <input type="date" id="data" name="data">
    <br><br>
    <label for="horario">Selecione o horário:</label>
    <select id="horario" name="horario">
      <option value="9:00">9:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
    </select>

    <label for="empregados">Selecione o empregado:</label>
    <?php
      $sql = "SELECT nome FROM empregados";
      $result = $conn->query($sql);
    ?>
    <!-- Código HTML para a lista suspensa -->
    <select id="empregados" name="empregado">
        <option value="Qualquer">Qualquer...</option>
        <?php
        // Se houver resultados da consulta, preenche as opções da lista suspensa
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . "</option>";
            }
        } else {
            echo "<option value='Nenhum'>Nenhum empregado encontrado</option>";
        }
        ?>
    </select>

    <label for="servicos">Tipo de serviço de limpeza:</label>
    <select id="servicos" name="servico">
      <option value="Externo">Limpeza externa de vidros</option>
      <option value="Interno">Limpeza interna de vidros</option>
      <option value="Ambos">Limpeza interna e externa de vidros</option>
      <option value="Outros">Outros serviços</option>
    </select>

    <label for="nome">Nome do cliente:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite o nome do cliente">

    <button type="submit">Adicionar Marcação</button>
  </form>

  
</div>

</body> 
</html>
