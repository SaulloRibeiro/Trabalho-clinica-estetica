<?php

include_once(__DIR__."/../controller/ProcedimentoController.php");


$nomeProcedimento = $_GET['nomeProcedimento'];
$precoProcedimento = $_GET['preco'];
$precoProcedimento = str_replace(",",".",$precoProcedimento);

$procedimentoController = new ProcedimentoController();
try{
    $procedimentoController->atualizarProcedimento($nomeProcedimento, $precoProcedimento);
    echo "Preço foi atualizado com sucesso!";
}
catch(Exception $e){
    echo "Error ao alterar o preço do procedimento: {$e->getMessage()}";
}


?>