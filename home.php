<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Do Crud</title> 
    <link rel="stylesheet" href="./visual/login.css">   
</head>
<body>

    <div class="form">
        <h1>Inserir</h1>
        <hr>
        <form action="./controller/UsuarioController.php" method="POST">
            <label for="nome">Nome</label>
            <input type="nome" id="nome" name="nome" required><br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required><br><br>

            <button type="submit" name="inserir">Enviar</button>
        </form>
    </div>

</body>
</html>