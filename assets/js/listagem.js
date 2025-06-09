const dataComponente = document.getElementById("diaId");
const procedimentoComponente = document.getElementById("procedimentoId");
const horarioComponente = document.getElementById("horarioId");
const containerDaListagemProcedimento = document.getElementById("container-listagem-procedimentoId");


function addProcedimento(){
    let dataSelecionada = dataComponente.value;
    let procedimentoSelecionado = procedimentoComponente.value;
    let horarioSelecionado = horarioComponente.value;

    let componente = `<div class="procedimento">
                        <div class="dados">
                            <span>${procedimentoSelecionado}</span>
                            <span>${dataSelecionada}</span>
                            <span>${horarioSelecionado}</span>
                        </div>
                        <div class="btn-container">
                            <button class="btn-remover">remover</button>
                        </div>
                    </div>`;
    
    containerDaListagemProcedimento.innerHTML += componente;
}
