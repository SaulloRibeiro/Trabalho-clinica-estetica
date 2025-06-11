<?php

include_once('DBconexao.php');
include_once('../models/Procedimento.php');

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

    public function listarProcedimentos(){
        $listaProcedimetos = [];

        $sql = $this->ConexaoBancoDados->prepare("SELECT * FROM procedimentos");
        $sql->execute();

        while($resultado = $sql->fetch(PDO::FETCH_ASSOC)){
            $idProcedimento = $resultado['id_procedimento'];
            $nomeProcedimento = $resultado['nome_procedimento'];
            $precoProcedimento = $resultado['preco_procedimento'];
            $descricaoProcedimento = $resultado['descricao'];
            $nomeImgProcedimento = $resultado['nome_img_correspondente'];
            $procedimento = new Procedimento($idProcedimento, $nomeProcedimento, $precoProcedimento, $descricaoProcedimento, $nomeImgProcedimento);
            array_push($listaProcedimetos, $procedimento);
        }

        $this->ConexaoBancoDados = null;
        return $listaProcedimetos;

    }

}









?>