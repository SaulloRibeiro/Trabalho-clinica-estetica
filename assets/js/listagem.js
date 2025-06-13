const dataComponente = document.getElementById("diaId");
const procedimentoComponente = document.getElementById("procedimentoId");
const horarioComponente = document.getElementById("horarioId");
const containerDaListagemProcedimento = document.getElementById("container-listagem-procedimentoId");

let contador = 0;


function validarData(){
    dataSelecionada = dataComponente.value;

    const hoje = new Date();
    hoje.setHours(0, 0, 0, 0);

    const dataSelecionadaObjeto = new Date(dataSelecionada);
    selecionada.setHours(0, 0, 0, 0);

    if(dataSelecionadaObjeto <= hoje){
        alert("Data invalida! Não é possível abrir agenda para dias passados ou dia atual");
        return;
    }

}


function addProcedimento(){
    let dataSelecionada = dataComponente.value;
    let procedimentoSelecionado = procedimentoComponente.value;
    let horarioSelecionado = horarioComponente.value;

    contador++;
    
    let componente = `<div class="procedimento" id="procedimento-${contador}">
                        <div class="dados">
                            <span>${procedimentoSelecionado}</span>
                            <span>${dataSelecionada}</span>
                            <span>${horarioSelecionado}</span>
                        </div>
                        <div class="btn-container">
                            <button type="button"class="btn-remover" onclick="deletar(${contador})">remover</button>
                        </div>
                        <input type="hidden" name="procedimentos[]" value="${procedimentoSelecionado}">
                        <input type="hidden" name="datas[]" value="${dataSelecionada}">
                        <input type="hidden" name="horarios[]" value="${horarioSelecionado}">
                    </div>`;
    

    if(dataSelecionada !== "" && procedimentoSelecionado !== "" && horarioSelecionado !== ""){
        containerDaListagemProcedimento.innerHTML += componente;
        return;
    }
    alert("Preencha todos os campos, para poder adicionar o procedimento na agenda!");
        
}

function deletar(id){
    const elementoParaApagar = document.getElementById("procedimento-"+id);
    elementoParaApagar.remove();
}
