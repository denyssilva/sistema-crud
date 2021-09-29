<?php

require_once '../model/Usuario.php';
require_once '../conn/Conn.php';

class UsuarioDAO{
    public static function inserir(Usuario $usuario){
        $sql = "INSERT INTO usuario(nome,email,senha) VALUES (:nome,:email,:senha)";
        
        $p_sql = Conn::getConexao()->prepare($sql);

        $p_sql->bindvalue(":nome", $usuario->getNome());
        $p_sql->bindvalue(":email", $usuario->getEmail());
        $p_sql->bindvalue(":senha", $usuario->getSenha());

        return $p_sql->execute();
    }
}