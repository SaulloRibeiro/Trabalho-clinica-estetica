<?php

include_once(__DIR__."/../models/Cliente.php");
include_once(__DIR__."/../models/Agendamento.php");
include_once(__DIR__."/../controller/ClienteController.php");
include_once(__DIR__."/../controller/AgendamentoController.php");

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
$dataHorario = $_POST['dataHorario'];
$data = substr($dataHorario, 0, 10);
$horario = substr($dataHorario, -4);

$agendamentoController = new AgendamentoController();
try{
    $agendamentoController->inserirAgendamento($idCliente, $data, $horario, $nomeProcedimento);
    header("Location: ../../confirmacaoAgendamento.html");
    exit;
}
catch(Exception $e){
    echo "Erro ao inserir agendamento";
}











?>