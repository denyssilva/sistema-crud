<?php

include_once "../conn/Conn.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

$u = new Usuario();
$udao = new UsuarioDAO();

// filtragem na variavel abaixo, feito para reforçar a segurança 
$filtro = filter_input_array(INPUT_POST);

if (isset($_POST['inserir'])) {
    $u->setNome($filtro['nome']);
    $u->setEmail($filtro['email']);
    $u->setSenha($filtro['senha']);

    $udao->inserir($u);
    header("Location: ../");
}

elseif (isset($_POST['remover'])) {
    # code...
}

elseif (isset($_POST['atualizar'])) {
    # code...
}