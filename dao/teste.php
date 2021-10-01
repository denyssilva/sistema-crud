<?php

require_once "../model/Usuario.php";
require_once "../dao/UsuarioDAO.php";

echo "Tela de teste";

$u = new Usuario();
$x = UsuarioDAO::lerTodos();

echo "<pre>";
    print_r($x);
echo "</pre";



/*
*******************************************
atualização
$u = new Usuario();
$x = UsuarioDAO::lerTodos();

echo "<pre>";
    print_r($x);
echo "</pre";

*******************************************
inserção

$u = new Usuario();
$u->setNome("maria");
$u->setEmail("maria@mail.com");
$u->setSenha("123");

UsuarioDAO::inserir($u);
*******************************************
*/
