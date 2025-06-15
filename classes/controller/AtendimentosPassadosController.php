<?php

include_once('DBconexao.php');
include_once('../models/Agendamento.php');

class AtendimentoPassadosController{

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

    public function listarAtendimentos($data){
        if ($this->ConexaoBancoDados === null) {
            $db = new DBconexao();
            $this->ConexaoBancoDados = $db->conectar();
        }

        try{
            $sql = $this->ConexaoBancoDados->prepare("SELECT * FROM agendamentos_view WHERE data_agendamento = :dataDoAtendimento");
            $sql->bindValue(":dataDoAtendimento", $data);
            $sql->execute();
            
            $listaAgendamentos = [];
            while($resultado = $sql->fetch(PDO::FETCH_ASSOC)) {
                $nomeCliente = $resultado['nome_cliente'];
                $telefoneCliente = $resultado['telefone_cliente'];
                $emailCliente = $resultado['email_cliente'];
                $nomeProcedimento = $resultado['nome_procedimento'];
                $dataAgendamento = $resultado['data_agendamento'];
                $horario = $resultado['horario_agendado'];

                $cliente = new Cliente($nomeCliente, $telefoneCliente, $emailCliente);
                $agendamento = new Agendamento($cliente, $nomeProcedimento, $dataAgendamento, $horario);
                array_push($listaAgendamentos, $agendamento);
            }
    
            return $listaAgendamentos;
        }
        catch(Exception $e){
            throw new Exception("Erro em consultar registros: {$e->getMessage()}");
        }
        finally{
            $this->ConexaoBancoDados = null;
        }

    }



}







?>