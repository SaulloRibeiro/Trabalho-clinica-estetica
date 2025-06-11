<?php
    include_once('classes/controller/DBconexao.php');

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try{    
            $conexao = new DBconexao();
            $conexao->conectar(); 
            echo "deu certo";
        }
        catch(Exception $e){
            echo "$e->getMessage()";
        }
    
    ?>




</body>
</html>