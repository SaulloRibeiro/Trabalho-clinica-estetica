<?php

include_once(__DIR__."/../models/Cliente.php");
include_once(__DIR__."/../models/Agendamento.php");
include_once(__DIR__."/../controller/ClienteController.php");
include_once(__DIR__."/../controller/AgendamentoController.php");
include_once(__DIR__."/../controller/ProcedimentoController.php");
include_once(__DIR__."/../controller/AgendaDisponibilidadeController.php");

$nomeCliente = $_POST['nome'];
$emailCliente = $_POST['email'];
$telefoneCliente = $_POST['telefone'];
$cliente = new Cliente($nomeCliente, $telefoneCliente, $emailCliente);
$clienteController = new ClienteController();

try{
    $clienteController->inserirCliente($cliente);
}
catch(Exception $e){
    echo "Erro ao inserir cliente no banco de dados";
}
    
$idCliente = $clienteController->getIdCliente($emailCliente);

$nomeProcedimento = $_POST['procedimentos'];
$dataHorarioEscolhido = $_POST['dataHorario'];

if($dataHorarioEscolhido == null){
    header("Location: ../../agendamento.php");
    exit;
}

else{
        $data = substr($dataHorarioEscolhido, 0, 10);
        $horario = substr($dataHorarioEscolhido, 11, 5);
        $agendamentoController = new AgendamentoController();
        $procedimentoController = new ProcedimentoController();
        $idProcedimento = $procedimentoController->getIDProcedimento($nomeProcedimento);
        $agendaDisponibilidadeController =  new AgendaDisponibilidadeController();
    try{
        $agendamentoController->inserirAgendamento($idCliente, $data, $horario, $nomeProcedimento);
        $agendaDisponibilidadeController->deletarDisponibilidade($idProcedimento, $horario);
        header("Location: ../../confirmacaoAgendamento.html");
        exit;
    }
    catch(Exception $e){
        echo "Erro ao inserir agendamento: {$e->getMessage()}";
    }
}












?>