<?
    spl_autoload_register(function($nomeDaClasse){

        $pastaClasses = 'classes/';
        $possiveisCaminhos = [
            $pastaClasses,
            $pastaClasses . 'models/' ,
            $pastaClasses . 'controller/' ,
            $pastaClasses . 'view/' 
        ];

        foreach($possiveisCaminhos as $pastaAtual){
            $nomeArquivo = $pastaAtual . $nomeDaClasse . '.php';
            
            if(file_exists($nomeArquivo)){
                require_once $nomeArquivo;
                break;
            }

        }
    });

?>