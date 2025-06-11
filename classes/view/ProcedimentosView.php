<?php

include_once('procedimentoController.php');


class ProcedimentoView{
    



    public function criarCardsDosProcedimentos(){
        try{
            $procedimentoController = new ProcedimentoController();
            
            foreach($procedimentoController->listarProcedimentos() as $procedimento){

                echo "";











            }






        }










    }





}














?>