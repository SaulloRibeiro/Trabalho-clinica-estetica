<?php

include_once('../controller/UsuarioController.php');
include_once('../models/Usuario.php');

$email = $_POST['userName'];
$senha = $_POST['password'];

$usuario = new Usuario($email, $senha);
try{
    $usuarioController = new UsuarioController();
    if($usuarioController->UsuarioESenhaEstaCorreto($usuario)){
        header('Location: ../../administrativoPaginaInicial.html');
        exit;
    }
    else{
        header('Location: ../../login.html');
        exit;
    }

}
catch(Exception $e){
    echo "Error ao autenticar senha: ".$e->getMessage();
}

?>