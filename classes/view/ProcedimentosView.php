<?php

include_once('procedimentoController.php');


class ProcedimentoView{
    



    public function criarCardsDosProcedimentos($categoria){
        try{
            $procedimentoController = new ProcedimentoController();
            
            foreach($procedimentoController->listarProcedimentos($categoria) as $procedimento){

                echo "";











            }






        }










    }





}














?>