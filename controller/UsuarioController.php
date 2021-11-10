<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/conn/Conn.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/model/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/sistema-crud/dao/UsuarioDAO.php';

$u = new Usuario();
$udao = new UsuarioDAO();

// filtragem na variavel abaixo, feito para reforçar a segurança 
$filtro = filter_input_array(INPUT_POST);

// inserir
if (isset($_POST['inserir'])) {
    $u->setNome($filtro['nome']);
    $u->setEmail($filtro['email']);
    $u->setSenha($filtro['senha']);

    $udao->inserir($u);
    header("Location: ../home.php");
}

// remover
elseif (isset($_GET['rem'])) {
    $u->setId($_GET['rem']);

    $udao->remover($u);
    header("Location: ../home.php");
}

// atualizar
elseif (isset($_POST['atualizar'])) {
    $u->setNome($filtro['nome']);
    $u->setEmail($filtro['email']);
    $u->setSenha($filtro['senha']);
    $u->setId($filtro['id']);

    //print_r($u);
    $udao->atualizar($u);
    header("Location: ../home.php");
}

else{
    header("Location: ../home.php");
}

