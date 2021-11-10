<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/visual/cab.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/model/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/conn/Conn.php';

$u = new Usuario();

if (isset($_GET['id'])){
    require_once  $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/dao/UsuarioDAO.php';
    $u = UsuarioDAO::getById($_GET['id']);
}

?>
    <div class="form">  
        <h1>Atualizar usuario</h1>
        <hr>
        <form action="./controller/UsuarioController.php" method="POST">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo $u->getNome(); ?>"><br><br>
            <label for="nome">Email</label>
            <input type="mail" id="email" name="email" value="<?php echo $u->getEmail(); ?>"><br><br>
            <label for="nome">Senha</label>
            <input type="text" id="senha" name="senha" value="<?php echo $u->getSenha(); ?>"><br><br>
            <input type="hidden" id="id" name="id" value="<?= $u->getId() ?>" />

            <button type="submit" name="atualizar">Enviar</button> |
            <button type="submit" name="" style="background:red; color:white">Cancelar</button> 

        </form>
    </div>

