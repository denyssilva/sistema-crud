<?php

require_once "../model/Usuario.php";
require_once "../dao/UsuarioDAO.php";

$u = new Usuario();
$u->setNome("Joao");
$u->setEmail("joao@mail.com");
$u->setSenha("123");

UsuarioDAO::inserir($u);