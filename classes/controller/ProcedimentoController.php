<?php

include_once('DBconexao.php');
include_once(__DIR__. '/../models/Procedimento.php');

class ProcedimentoController{

    private $ConexaoBancoDados;

    public function __construct(){
        try{
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }
        catch(Exception $e){
            throw new Exception("Erro ao consultar a base de dados: ".$e->getMessage());
        }
    }

    public function listarProcedimentos($tipoProcedimento){
        if ($this->ConexaoBancoDados === null) {
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }

        $listaProcedimetos = [];
        $sql = $this->ConexaoBancoDados->prepare("SELECT * FROM procedimentos_view WHERE descricao_categoria = :categoria");
        $sql->bindValue(":categoria", $tipoProcedimento);
        $sql->execute();

        while($resultado = $sql->fetch(PDO::FETCH_ASSOC)){
            $idProcedimento = $resultado['id_procedimento'];
            $nomeProcedimento = $resultado['nome_procedimento'];
            $precoProcedimento = $resultado['preco_procedimento'];
            $descricaoProcedimento = $resultado['descricao'];
            $nomeImgProcedimento = $resultado['nome_img_correspondente'];
            $categoriaProcedimento = $resultado['descricao_categoria'];
            $procedimento = new Procedimento($idProcedimento, $nomeProcedimento, $precoProcedimento, $descricaoProcedimento, $nomeImgProcedimento, $categoriaProcedimento);
            array_push($listaProcedimetos, $procedimento);
        }

        $this->ConexaoBancoDados = null;
        return $listaProcedimetos;

    }

    public function consultarPrecoProcedimento($procedimento=null){
        if ($this->ConexaoBancoDados === null) {
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }

        $sql = $this->ConexaoBancoDados->prepare("SELECT preco_procedimento FROM procedimentos_view 
        WHERE nome_procedimento = :Procedimento");
        $sql->bindValue(":Procedimento", $procedimento);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        return number_format($resultado['preco_procedimento'], 2,',','.');
    }

    public function getIDProcedimento($nomeProcedimento){
        if ($this->ConexaoBancoDados === null) {
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }

        $sql = $this->ConexaoBancoDados->prepare("SELECT id_procedimento FROM procedimentos WHERE
        nome_procedimento = :nome");
        $sql->bindValue(":nome", $nomeProcedimento);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        return $resultado['id_procedimento'];
    }
}









?>