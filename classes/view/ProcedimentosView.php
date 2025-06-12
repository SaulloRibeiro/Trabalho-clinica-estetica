<?php

include_once(__DIR__.'/../controller/ProcedimentoController.php');

class ProcedimentoView {

    public function criarCardsDosProcedimentos($categoria){
        try {
            $procedimentoController = new ProcedimentoController();

            foreach ($procedimentoController->listarProcedimentos($categoria) as $procedimento) {

                echo "<article class='card'>
                        <h3>" . $procedimento->getNome() . "</h3>
                        <div class='card-img'>
                            <img src='assets/img/" . $procedimento->getNomeImgCorrespondente() . "' alt='Uma mulher jovem deitada em uma cadeira de cabeleireiro fazendo uma hidratação. Esta jovem está com um sorriso no rosto.'>
                        </div>
                        <p class='valor-monetario'>R$" . number_format($procedimento->getValor(),2,',','.') . "</p>
                        <p>
                            <span class='negrito'>Descrição</span>: " . $procedimento->getDescricao() . "
                        </p>
                      </article>";
            }
        } catch (Exception $e) {
            echo "Erro ao consultar a base de dados: " . $e->getMessage();
        }
    }

}


?>