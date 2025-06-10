const campoNome = document.getElementById("nomeId");
const campoEmail = document.getElementById("emailId");
const campoTelefone = document.getElementById("telefoneId");
const campoMsgError = document.getElementsByClassName("msg-error");


function verificarInputNome(){
    let nome = campoNome.value;
    let quantidadeCaracteresSemEspacosAntesDepoisTexto = nome.trim().length;

    if(quantidadeCaracteresSemEspacosAntesDepoisTexto === 0){
        campoMsgError[0].style.display = "block";
        return;
    }

    campoMsgError[0].style.display = "none";
}


function verificarInputEmail(){
    let email = campoEmail.value;
    let quantidadeCaracteresSemEspacosAntesDepoisTexto = email.trim().length;
    let emailFormatado = email.trim();
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(quantidadeCaracteresSemEspacosAntesDepoisTexto === 0 || !regex.test(emailFormatado)){
        campoMsgError[1].style.display = "block";
        return;
    }

    campoMsgError[1].style.display = "none";
}

function verificarInputTelefone(){
    let telefone = campoTelefone.value;
    let quantidadeCaracteresSemEspacosAntesDepoisTexto = telefone.trim().length;

    if(quantidadeCaracteresSemEspacosAntesDepoisTexto === 0 || quantidadeCaracteresSemEspacosAntesDepoisTexto < 11){
        campoMsgError[2].style.display = "block";
        return;
    }

    campoMsgError[2].style.display = "none";
}

function limparInput(input){
    input.value = input.value.replace(/[^0-9]/g, "");
}


function teste(){
    alert(campoNome.value);
    alert(campoEmail.value);
    alert(campoTelefone.value);
}
