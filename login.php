<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css.css"> 
</head>
<body>
    <div class="login-box">
      <h1>Login</h1>
      <form action='trata_login.php' method='post'>
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password"><br>
        <input type="hidden" name="enviado" value=1>
        <input type="submit" value="Entrar">
      </form>
    <p>Não têm conta? <a href="signup.php">Crie uma Conta</a></p> 
  </div>
</body>
</html>