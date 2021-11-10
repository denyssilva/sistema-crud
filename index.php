<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/visual/cab.php';

?>

    <div class="form">
        <h1>Login</h1>
        <hr>
        <form action="home.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"><br><br>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha"><br><br>

            <button type="submit">Enviar</button>
        </form>
    </div>

    

</body>
</html>
