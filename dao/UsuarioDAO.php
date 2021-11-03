<?php


class UsuarioDAO{

    public static function inserir(Usuario $u){
        try {
            $sql = "INSERT INTO usuario(nome,email,senha) VALUES (:nome,:email,:senha)";
        
            $p_sql = Conn::getConexao()->prepare($sql);

            $p_sql->bindvalue(":nome", $u->getNome());
            $p_sql->bindvalue(":email", $u->getEmail());
            $p_sql->bindvalue(":senha", $u->getSenha());

            return $p_sql->execute();

        } catch (Exception $e) {
            print "Erro!!!: Nao foi possivel inserir usuario. <br>" . $e . '<br>';
        }
        
    }
    
    public static function remover(Usuario $u){
        try {
            $sql = "DELETE FROM usuario WHERE id = :id LIMIT 1";
            $p_sql = Conn::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $u->getId());
            return $p_sql->execute();

        } catch (Exception $e) {
            print "Erro!!!: Nao foi possivel remover usuario.".PHP_EOL."$e".PHP_EOL;
        }
        
    }

    // lerTodos() e listarUsuarios() andam juntas
    public static function lerTodos(){

        try {
            $sql = "SELECT * FROM usuario order by id asc";
            $result = Conn::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $for_lista = array();

            foreach ($lista as $l) {        
                $for_lista[] = self::listaUsuarios($l);
            }
                return $for_lista;
                
        } catch (Exception $e) {
                echo "Erro ao listar usuario.".PHP_EOL."$e".PHP_EOL;
        }
        
    }

    private static function listaUsuarios($row) {
        $u = new Usuario();
        $u->setId($row['id']);
        $u->setNome($row['nome']);
        $u->setEmail($row['email']);
        $u->setSenha($row['senha']);
        
        return $u;
    }

}