<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/visual/cab.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/model/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/conn/Conn.php';

$u = new Usuario();

?>

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

            <button type="submit" name="inserir">Enviar</button> |
            <button type="submit" name="" style="background:red; color:white">Cancelar</button> 
        </form>
    </div>

