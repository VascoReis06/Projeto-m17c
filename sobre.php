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
    </style>
</head>
<header>
    <div class="navbar">
        <div class="logo">
            <img src="img/logo2.png" alt="">
        </div>
        <ul class="links">
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li class="servicos-links"><a href="servicos.php" onclick="toggleDropdown()">Serviços</a></li>
            <li><a href="avaliacoes.php">Avaliações</a></li>
            <li><a href="contatos.php">Contatos</a></li>
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
</body>
</html>