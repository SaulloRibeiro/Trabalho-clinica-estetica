<?php

include_once(__DIR__ . "/../controller/ProcedimentoController.php");

$procedimento = $_GET['procedimento'] ?? '';

// if (empty($procedimento)) {
//     echo "Parametro 'procedimento' vazio ou não informado";
//     exit;
// }

$procedimentoController = new ProcedimentoController();

try {
    $preco = $procedimentoController->consultarPrecoProcedimento($procedimento);

    if (!$preco) {
        echo "Nenhum preço encontrado para: $procedimento";
    } else {
        echo $preco;
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
