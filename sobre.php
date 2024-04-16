<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css2.css">
    
    <style>
        .dropdown-content {
            display: none;
        }
        .dropdown-content.show {
            display: block;
        }
        .employee {
            display: inline-block;
            text-align: center;
            margin: 20px;
        }

        .employee img {
            width: 400px; /* Adjust the width as needed */
            height: auto;
            border-radius: 50%; /* Makes the images round */
            border: 4px solid cornflowerblue; /* Border color */
        }

        .employee p {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
            color: cornflowerblue; /* Text color */
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
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
    </div>
</header>
<body>
<br>
<br>
<br>
    <section>
        <h7>Especialistas em Serviços de Limpezas de Vidros</h7>
        <h2>Quem Somos</h2>  
        <h3>Temos +70 anos de Anos de Experiência em Limpezas!<h3>
        <ul>
            <li>Presente em 10 países
            <li>Mais de 5 técnicos de limpeza altamente qualificados em Portugal
            <li>Mais de 11000 unidades franchisadas
            <li>Mais de 1300 clientes empresariais em Portugal
        </ul>
        <button><a href="contatos.php">Contacte-nos</a></button>
        <br><br><hr>
        <h1>70 Anos Experiência | 70 000 Clientes Satisfeitos | 33% Poupanças nos Custos</h1>
        <hr>
        <h2>A Nossa História</h2>
        A TVR-Limpezas é uma marca portuguesa, fundada em 2024, durante uma reunião para decidir que tipo de projeto iria ser feito; - Foi quando Tiago Tomoiaga falou "- Ohhhh... vamos abrir uma empresa de limpar vidros!", vocacionada para limpezas de todo o tipo de vidros, mas também
        <p>Presente em Portugal desde 2024, conta atualmente com dezenas de franchisados e centenas de clientes empresariais em todo o país.
        <h2>A Nossa Equipa</h2>
            <div class="employee">
                <img src="img/vasco.png" alt="Employee 1">
                <p>Adolfina Reis</p>
            </div>
            <div class="employee">
                <img src="img/rudy.png" alt="Employee 1">
                <p>Ruby Vicente</p>
            </div>
            <div class="employee">
                <img src="img/tg1.png" alt="Employee 1">
                <p>Tiago Gomas</p>
            </div>
            <div class="employee">
                <img src="img/tpk.png" alt="Employee 1">
                <p>Trio Maravilha </p>
                <p>Rodriga Cidades | Rodriga Komonica | Tiaga Tomolimpa</p>
               
            </div>
            <div class="employee">
                <img src="img/ts1.png" alt="Employee 1">
                <p>Tiago Santinho</p>
            </div>
        <h2>O Nosso Compromisso - a Perfeição</h2>
        <p></p>
        Com quase 70 anos de experiência na área, a TVR-Limpezas tornou-se sinónima de excelência em limpeza profissional em todo o mundo. Os nossos clientes confiam em nós para fornecer serviços de limpeza de vidros que superam as normas.
        <br><br>
        <br>


    </section>
<footer>
    © 2024 TVR-Limpezas Portugal - Todos os direitos reservados.
</footer>
</body>
</html>