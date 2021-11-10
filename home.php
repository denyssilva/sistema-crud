<?php
include_once "./visual/cab.php";

include_once "./dao/UsuarioDAO.php";
include_once "./model/Usuario.php";

$u = new Usuario();
$udao = new UsuarioDAO();

include_once "./conn/Conn.php";

?>

    <style>
        table, th, td {
            border:1px solid black;
            background-color: #ccc;
        }

        button{
            margin:auto;
        }

        button#excluir{
            color: white;
            background-color: red;
        }
        
        button#atualizar{
            color: black;
            background-color: yellow;
        }

        button#inserir{
            color: white;
            background-color: green;
        }

    </style>

    <a href="./inserir.php">
        <button id="inserir">Inserir</button>
    </a>

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
                        <button id="atualizar" onclick="alterarUsuario(<?= $u->getId() ?>)">atualizar</button>
                        <button id="excluir"  onclick="deletarUsuario(<?= $u->getId() ?>)">Excluir</button>
                    </td>

                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<script>

    function deletarUsuario(id) {
        var op = confirm(`Deseja excluir?`+ id);
        if (op === true) {
            window.location='./controller/UsuarioController.php?rem='+id;
        }
    }
    
    function alterarUsuario(id) {
        var op = confirm(`Deseja alterar?`+ id);
        if (op === true) {
            window.location='./alterar.php?id='+id;
        }
    }

</script>

