<?php
require_once '../conn/Conn.php';
require_once "../model/Usuario.php";
require_once "../dao/UsuarioDAO.php";

echo "Tela de teste".PHP_EOL;

$u = new Usuario();
$x = UsuarioDAO::remover($u);



/*
*******************************************
atualização
echo "Atualização".PHP_EOL;
$u = new Usuario();
$x = UsuarioDAO::lerTodos();

echo "<pre>";
    print_r($x);
echo "</pre";

*******************************************
inserção
echo "Inserção".PHP_EOL;

$u = new Usuario();
$u->setNome("maria");
$u->setEmail("maria@mail.com");
$u->setSenha("123");

UsuarioDAO::inserir($u);
*******************************************
*/
