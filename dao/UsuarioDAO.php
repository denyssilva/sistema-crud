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

    public static function atualizar(Usuario $u){

        try {
            $sql = "UPDATE FROM usuario SET
            nome=:nome,
            email=:email,
            senha=:senha
            WHERE id=:id LIMIT 1";

            $p_sql = Conn::getConexao()->prepare($sql);

            $p_sql->bindValue(':nome',$u->nome);
            $p_sql->bindValue(':email',$u->email);
            $p_sql->bindValue(':senha',$u->senha);
            $p_sql->bindValue(':id', $u->id);

            $p_sql->execute();

        } catch (Exception $e) {
            echo "Não foi possivel alterar" . $e->getMessage();
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

    public static function pegarUsuario($id){
        try{
            $sql = "SELECT * FROM usuario WHERE id=:id LIMIT 1";
            $p_sql = Conn::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            $count = $p_sql->rowCount();

            if($count===1){
                return TRUE;
            } else{
                return FALSE;
            }
        }        
        catch(Exception $e ){
            echo "erro: nao foi possivel selecionar. ".$e->getMessage();
        }
    }

    public static function getById($id){
        try{
            $sql = "SELECT * FROM usuario WHERE id=:id LIMIT 1";
            $p_sql = Conn::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            $dados = $p_sql->fetch(PDO::FETCH_OBJ);
            //print_r($p_sql); 
            if ($dados != null) {
                return self::popularObjeto($dados);
            } else{ 
                return "objeto nullo";
            }
        }        
        catch(Exception $e ){
            echo "erro: nao foi possivel selecionar. ".$e->getMessage();
        }
    }

    private static function popularObjeto($dados) {
        $u = new Usuario();
        $u->setId($dados->id);
        $u->setNome($dados->nome);
        $u->setEmail($dados->email);
        $u->setSenha($dados->senha);
        return $u;
    }

}