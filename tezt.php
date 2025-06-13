<?php

include_once(__DIR__."/classes/controller/ClienteController.php");
include_once(__DIR__."/classes/controller/ProcedimentoController.php");
include_once(__DIR__."/classes/models/Cliente.php");
include_once(__DIR__."/classes/controller/AgendaDisponibilidadeController.php");
include_once(__DIR__."/classes/controller/AgendamentoController.php");

try{
    // $cliente = new Cliente(null,"Abacaxi", "11111111111", "abacaxi@gmail.com");
    // $teste = new ClienteController();
    // $teste->inserirCliente($cliente);

    // $test = new ProcedimentoController();
    // echo "{$test->consultarPrecoProcedimento("hidratacao capilar")}";

    // $teste = new AgendaDisponibilidadeController();
    // var_dump($teste->consultarDisponibilidade());

    // $test = new ClienteController();
    // echo "{$test->getIdCliente("abacaxi@gmail.com")}";

    $teste = new AgendamentoController();
    $idCliente = 2;
    $data = "2025-06-12";
    $horario = "10:00"; 
    $nomeProcedimento = "teste";
    $teste->inserirAgendamento($idCliente, $data, $horario, $nomeProcedimento);
    echo "Deu certo aqui";


}
catch(Exception $e){
    echo "Error ao cadastrar {$e->getMessage()}";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>