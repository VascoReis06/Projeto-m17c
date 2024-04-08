<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<header>
    <nav>
        <a href="inicio.php">Início</a>
        <a href="sobre.php">Sobre</a>
        <a href="servicos.php">Serviços</a>
        <a href="marcacoes.php">Marcações</a>
        <a href="contatos.php">Contatos</a>
    </nav>
</header>

<body>
    <h1>Contatos</h1>
    
    <h2>Informações de Contato</h2>
    <p>Telefone: (11) 1234-5678</p>
    <p>Email: contato@tvr-limpezas.com</p>
    <p>Endereço: Rua Exemplo, 123 - Bairro, Cidade - Estado</p>
    
    <h1>Peça-nos Um Orçamento</h1>
    
    <form action="mailto:contato@tvr-limpezas.com" method="post" enctype="text/plain">
        <label for="nome">O Seu Nome (Obrigatório):</label><br>
        <input type="text" id="nome" name="nome" required><br>
        
        <label for="email">O Seu Email (Obrigatório):</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="telefone">O Seu Telefone / Telemóvel (Obrigatório):</label><br>
        <input type="tel" id="telefone" name="telefone" required><br>
        
        <label for="localizacao">A Sua Localização (Obrigatório):</label><br>
        <input type="text" id="localizacao" name="localizacao" required><br>
        
        <label for="objetivo">Por Favor, Diga o Que Melhor Descreve o Seu Objectivo (Obrigatório):</label><br>
        <select id="objetivo" name="objetivo" required>
            <option value="limpezas">Preciso de Serviço de Limpezas</option>
            <option value="trabalho">Procuro Trabalho Em Limpezas</option>
            <option value="parceiro">Quero Ser Parceiro da Jani-King</option>
            <option value="outro">Outro Assunto</option>
        </select><br>
        
        <label for="mensagem">A Sua Mensagem (Obrigatório):</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea><br>
        
        <input type="checkbox" id="privacidade" name="privacidade" value="concordo" required>
        <label for="privacidade">Li e concordo com a política de privacidade da Jani-King (Obrigatório)</label><br>
        
        <input type="checkbox" id="newsletter" name="newsletter" value="confirmo">
        <label for="newsletter">Confirmo que gostaria de obter informações da Jani-King</label><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>