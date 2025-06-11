<?php

class DBconexao{
    private $Usuario = "root";
    private $Senha = "";
    private $StringConexao = "mysql:host=localhost;dbname=s_estetics";
    private PDO $Conexao;

    public function conectar(){
        try{
            $this->Conexao = new PDO($this->StringConexao, $this->Usuario, $this->Senha);
            $this->Conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->Conexao;
        }
        catch(PDOException $e){
            throw new Exception($e->getMessage());
            
        }
    }

    public function desconectar(){
        $this->Conexao = null;
    }

}

?>




