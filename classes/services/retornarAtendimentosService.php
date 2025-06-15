<?php

include_once(__DIR__."/../controller/AtendimentosPassadosController.php");
include_once(__DIR__."/../controller/ClienteController.php");

$dataSelecionado = $_GET['dataSelecionada'] ?? '';

$atendimentosController = new AtendimentoPassadosController();

$atendimentos = $atendimentosController->listarAtendimentos($dataSelecionado);
$dadosFormatados = [];

foreach($atendimentos as $dado){
        $dadosFormatados[] = [
            'nome_cliente' => $dado->getCliente()->getNome(),
            'telefone_cliente' => $dado->getCliente()->getTelefone(),
            'email_cliente' => $dado->getCliente()->getEmail(),
            'nome_procedimento' => $dado->getProcedimento(),
            'horario' => $dado->getHorario()
        ];
}


header('Content-Type: application/json');
echo json_encode($dadosFormatados);

?>