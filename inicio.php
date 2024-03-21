<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
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
    
    <section class="Home">
        <h2>Bem-vindo à nossa empresa de limpezas</h2>
        <h3>REALIZAMOS TODOS SERVIÇOS DE LIMPEZA!</h3>
        <h4>A SuperLimpa realiza todos serviços de limpeza a 7€. É uma empresa de limpeza com mais de 20 anos de experiência, que realiza todo e qualquer tipo serviço de limpeza! Prestamos serviços de limpeza em Lisboa, Porto, Algarve e nas ilhas dos Açores e da Madeira, sendo que, atualmente, já cobrimos todo o território continental.
        Somos uma empresa de limpeza de Lisboa com uma vasta experiência em qualquer área de intervenção, tal como, nas limpezas empresariais, domésticas e industriais, temos profissionais com alta competência e experiência técnica, estamos munidos com as máquinas e produtos de última geração! Leia mais<h4>
    </section>
    
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.querySelector('.dropdown-menu');
            dropdownMenu.classList.toggle('show');
        }
    </script>
</body>
<footer></footer>
</html>
