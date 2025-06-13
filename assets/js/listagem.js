const dataComponente = document.getElementById("diaId");
const procedimentoComponente = document.getElementById("procedimentoId");
const horarioComponente = document.getElementById("horarioId");
const containerDaListagemProcedimento = document.getElementById("container-listagem-procedimentoId");

let contador = 0;

function validarData() {
    const dataSelecionada = dataComponente.value;
    if (!dataSelecionada) {
        alert("Por favor, selecione uma data.");
        return false;
    }

    const hoje = new Date();
    const ano = hoje.getFullYear();
    const mes = String(hoje.getMonth() + 1).padStart(2, '0');
    const dia = String(hoje.getDate()).padStart(2, '0');

    const dataHojeString = `${ano}-${mes}-${dia}`;

    if (dataSelecionada <= dataHojeString) {
        alert("Data inválida! Não é possível abrir agenda para dias passados ou o dia atual.");
        return false;
    }

    return true;
}

dataComponente.addEventListener("change", validarData);


function addProcedimento(){
    if (!validarData()) {
        return;
    }

    let dataSelecionada = dataComponente.value;
    let procedimentoSelecionado = procedimentoComponente.value;
    let horarioSelecionado = horarioComponente.value;

    if (dataSelecionada === "" || procedimentoSelecionado === "" || horarioSelecionado === "") {
        alert("Preencha todos os campos para adicionar o procedimento!");
        return;
    }

    contador++;
    
    let componente = `<div class="procedimento" id="procedimento-${contador}">
                        <div class="dados">
                            <span>${procedimentoSelecionado}</span>
                            <span>${dataSelecionada}</span>
                            <span>${horarioSelecionado}</span>
                        </div>
                        <div class="btn-container">
                            <button type="button" class="btn-remover" onclick="deletar(${contador})">Remover</button>
                        </div>
                        <input type="hidden" name="procedimentos[]" value="${procedimentoSelecionado}">
                        <input type="hidden" name="datas[]" value="${dataSelecionada}">
                        <input type="hidden" name="horarios[]" value="${horarioSelecionado}">
                    </div>`;
    
    containerDaListagemProcedimento.innerHTML += componente;
}


function deletar(id){
    const elementoParaApagar = document.getElementById("procedimento-"+id);
    elementoParaApagar.remove();
}
