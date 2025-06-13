<?php

include_once(__DIR__."/../controller/AgendaDisponibilidadeController.php");

$procedimento = $_GET['procedimento'] ?? '';
$procedimentoController = new AgendaDisponibilidadeController();

$disponibilidades = $procedimentoController->consultarDisponibilidade($procedimento);

$dadosFormatados = [];

foreach ($disponibilidades as $disponibilidade) {
    $dadosFormatados[] = [
        'data' => $disponibilidade->getData(),
        'horario' => $disponibilidade->getHorario()
    ];
}

header('Content-Type: application/json');
echo json_encode($dadosFormatados);

?>