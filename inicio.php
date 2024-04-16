<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css.css">
    
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
    
    <section class="Home">
    
    <h2>Empresa de Limpeza de Vidros</h2>
    <h3>Somos Especialistas em Serviços de Limpezas de Vidros em Portugal.
    <p> Temos Mais de 70 Anos de Experiência Em Limpezas.
    <p> +700 Empresas Confiam na TVR-Limpezas Para Manter as Suas Instalações Limpas & Seguras</h3>
    <button><a href="contatos.php">Contacte-nos</a></button>
    <br><br><hr>
    <h1>70 Anos Experiência | 70 000 Clientes Satisfeitos | 33% Poupanças nos Custos</h1>
    <hr>
    <h2>O que nos distingue como Empresa de Limpezas? | Equipas Qualificadas e Comprometidas</h2>
    <h3>Investimos na formação regular e contínua das nossas equipas, as quais não só são qualificadas e experientes, mas também atentas às necessidades específicas dos nossos clientes, sendo reconhecidas pela sua qualidade.</h3>
    <h2>Flexibilidade Horária</h2>
    <h3>Estamos disponíveis 24 horas por dia, 7 dias por semana, para garantir que os seus espaços se encontram sempre impecáveis. Adaptamo-nos à rotina de cada empresa garantindo assim a máxima conveniência e satisfação dos nossos clientes.</h3>
    </section>
    
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.querySelector('.dropdown-menu');
            dropdownMenu.classList.toggle('show');
        }
    </script>
</body>
<br>
<br>
<br>
<br>
<footer>
© 2024 TVR-Limpezas Portugal - Todos os direitos reservados.
</footer>
</html>
