<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="css8.css">
    
    <style>
        .dropdown-content {
            display: none;
        }
        .dropdown-content.show {
            display: block;
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
<body>
<br>
<br>
<br>
<h1>Contatos</h1>
   
   <h2>Informações de Contato</h2>
   <p>Telefone: 967 504 699</p>
   <p>Email: clientestvrlimpezas@gmail.com</p>
   <p>Endereço: Canárias, Paraíso Fiscal</p>
  
   <h1>Peça-nos Um Orçamento</h1>
  
   <form action="mailto:contato@tvr-limpezas.com" method="post" enctype="text/plain">
       <label for="nome">Nome (Obrigatório):</label><br>
       <input type="text" id="nome" name="nome" required><br>
      
       <label for="email">Email (Obrigatório):</label><br>
       <input type="email" id="email" name="email" required><br>
      
       <label for="telefone">Telefone / Telemóvel:</label><br>
       <input type="tel" id="telefone" name="telefone"><br>
      
       <label for="localizacao">A Sua Localização (Obrigatório):</label><br>
       <input type="text" id="localizacao" name="localizacao" required><br>
      
       <label for="objetivo">Por Favor, Diga o Que Melhor Descreve o Seu Objectivo (Obrigatório):</label><br>
       <select id="objetivo" name="objetivo" required>
           <option value="limpezas">Preciso de Serviço de Limpezas</option>
           <option value="trabalho">Procuro Trabalho Em Limpezas</option>
           <option value="parceiro">Quero Ser Parceiro da TVR-Limpezas</option>
           <option value="outro">Outro Assunto</option>
       </select><br>
      
       <label for="mensagem">A Sua Mensagem (Obrigatório):</label><br>
       <textarea id="mensagem" name="mensagem" rows="4" cols="50"></textarea><br>
      
       <input type="checkbox" id="privacidade" name="privacidade" value="concordo" required>
       <label for="privacidade">Li e concordo com a política de privacidade da TVR-Limpezas (Obrigatório)</label><br>
      
       <input type="checkbox" id="newsletter" name="newsletter" value="confirmo">
       <label for="newsletter">Confirmo que gostaria de obter informações da TVR-Limpezas</label><br>
      
       <input type="submit" value="Enviar">
   </form>

<footer>
   © 2024 TVR-Limpezas Portugal - Todos os direitos reservados.
</footer>
</body>
</html>