<?php
include_once "./visual/cab.php";

include_once "./dao/UsuarioDAO.php";
include_once "./model/Usuario.php";

$u = new Usuario();
$udao = new UsuarioDAO();

include_once "./conn/Conn.php";

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

            <button type="submit" name="inserir">Enviar</button>
        </form>
    </div>

    <hr>

    <div>
        <table style="width: 90%;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody> 
                <?php
                    foreach ($udao->lerTodos() as $u) : 
                ?>
                <tr>
                    <td> <?= $u->getId() ?></td>
                    <td> <?= $u->getNome() ?></td> 
                    <td> <?= $u->getEmail() ?></td> 
                    <td> <?= $u->getSenha() ?></td> 
                    <td>
                        <button id="alterar">Alterar</button>
                        <button id="excluir">Excluir</button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<style>
    table, th, td {
        border:1px solid black;
    }

    button{
        margin:auto;
    }

    button#excluir{
        color: white;
        background-color: red;
    }
    
    button#alterar{
        color: black;
        background-color: yellow;
    }

</style>