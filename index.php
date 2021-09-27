<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de Login</title>    
</head>
<body>
    <h1>Login</h1>
    <form action="/action_page.php" method="get" target="_blank">
        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha"><br><br>

        <input type="submit" value="Submit using GET">
        <input type="submit" formmethod="post" value="Submit using POST">
    </form>
</body>
</html>
