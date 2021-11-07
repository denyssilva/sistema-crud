<?php
require_once "./visual/cab.php";

require_once "./model/Usuario.php";
require_once "./conn/Conn.php";

$u = new Usuario();
//$u = UsuarioDAO::getById($_GET['id']);

if (isset($_GET['id'])){
    require_once './dao/UsuarioDAO.php';
    $u = UsuarioDAO::getById($_GET['id']);
}

?>
    <div class="form">  
        <h1>Atualizar usuario</h1>
        <hr>
        <form action="" method="POST">
            

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo $u->getNome(); ?>"><br><br>
            <label for="nome">Email</label>
            <input type="mail" id="email" name="email" value="<?php echo $u->getEmail(); ?>"><br><br>
            <label for="nome">Senha</label>
            <input type="text" id="nome" name="nome" value="<?php echo $u->getSenha(); ?>"><br><br>

            <button type="submit" name="inserir">Enviar</button>
        </form>
    </div>


