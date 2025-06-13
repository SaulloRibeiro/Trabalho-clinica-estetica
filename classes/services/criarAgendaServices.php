<?php

include_once(__DIR__."/../controller/AgendaDisponibilidadeController.php");
include_once(__DIR__."/../controller/ProcedimentoController.php");
include_once(__DIR__."/../models/AgendaDisponibilidade.php");

$procedimentosController = new ProcedimentoController();
$agendaDisponibilidadeController = new AgendaDisponibilidadeController();

$procedimentos = $_GET['procedimentos'];
$datas = $_GET['datas'];
$horarios = $_GET['horarios'];

for($index = 0; $index < count($procedimentos); $index++){
    $idProcedimento = $procedimentosController->getIDProcedimento($procedimentos[$index]);
    $dataSelecionada = $datas[$index];
    $horarioSelecionado = $horarios[$index];
    $disponibilidade = new AgendaDisponibilidade($dataSelecionada,$horarioSelecionado,$idProcedimento);
    $agendaDisponibilidadeController->inserirDisponibilidade($disponibilidade);
}


header("Location: ../../agendaCriadaMsg.html");
exit;

?>