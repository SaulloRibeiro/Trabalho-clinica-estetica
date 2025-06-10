const elementoSenha = document.getElementById("senhaId");


function mascaraTelefone(input){
    input.value = input.value.replace(/^(\d{2})(\d{5})(\d{0,4})/, "($1) $2-$3");
}

function mostrarOuEsconderSenha(){
    let iconeOlho = document.getElementById("olho");

    if(elementoSenha.type === "password"){
        iconeOlho.className = "fa-solid fa-eye";
        elementoSenha.setAttribute("type", "text");
    }
    else{
        iconeOlho.className = "fa-regular fa-eye-slash";
        elementoSenha.setAttribute("type", "password");
    }
}