const inputContainer = document.getElementsByClassName("input-valor-editar");
const procedimentoSelecionadoComponente = document.getElementById("procedimentoId");


function escolhaProcedimento(procedimento){
    if(procedimentoSelecionadoComponente.value !== ""){
        inputContainer[0].value = procedimentoSelecionadoComponente.value;
        fetch(`/N1-final/classes/services/retornarPrecoService.php?procedimento=${encodeURIComponent(procedimento)}`)
        .then(response => {
             if (!response.ok) throw new Error('Erro na requisição');
                return response.text();
        })
        .then(preco => {
            inputContainer[1].disabled = false;
            inputContainer[1].value = preco;
        })
        .catch(() => {
            elementoInputParaMostrarPreco.value = "Erro ao carregar preço";
        });
    }

}

function validaPreco(input){
    if(input.value === "" || input.value == 0)
        alert("Informe o valor monetario válido");
    else 
        return;
}

procedimentoSelecionadoComponente.addEventListener("change", e => {
    escolhaProcedimento(e.target.value);
});
