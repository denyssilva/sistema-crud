<?php
include_once "./visual/cab.php";

include_once "./dao/UsuarioDAO.php";
include_once "./model/Usuario.php";
include_once "./conn/Conn.php";

$u = new Usuario();
$udao = new UsuarioDAO();
$udao->pegarUsuario(3);


?>
    <div class="form">  
        <h1>Atualizar usuario</h1>
        <hr>
        <form action="" method="POST">
            

            <label for="nome">Nome</label>
            <input type="nome" id="nome" name="nome" required
            value="<?php echo $u->getNome(); ?>"><br><br>

            <button type="submit" name="inserir">Enviar</button>
        </form>
    </div>


