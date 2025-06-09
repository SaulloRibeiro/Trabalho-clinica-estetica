const inputContainer = document.getElementsByClassName("input-valor-editar");
const procedimentoSelecionadoComponente = document.getElementById("procedimentoId");


function escolhaProcedimento(){
    if(procedimentoSelecionadoComponente.value !== ""){
        for(let index = 0; index < inputContainer.length; index++)
            inputContainer[index].disabled = false;
    }
}
