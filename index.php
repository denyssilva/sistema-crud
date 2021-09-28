<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de Login</title> 
    <link rel="stylesheet" href="./visual/login.css">   
</head>
<body>

    <div class="form">
        <h1>Login</h1>
        <hr>
        <form action="/action_page.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"><br><br>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha"><br><br>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
