const selectHorario = document.getElementById("dataHorarioId");
const procedimentoSelect = document.getElementById("procedimentoId");

function carregarHorarios(procedimento) {
  fetch(`/N1-final/classes/services/retornarDisponibilidadeService.php?procedimento=${encodeURIComponent(procedimento)}`)
    .then(response => {
      if (!response.ok) throw new Error("Erro na requisição");
      return response.json();
    })
    .then(disponibilidades => {
      selectHorario.innerHTML = '';

      if (disponibilidades.length === 0) {
        const option = document.createElement("option");
        option.value = "";
        option.textContent = "Sem horários";
        option.disabled = true;
        option.selected = true;
        selectHorario.appendChild(option);
        return;
      }

      disponibilidades.forEach(item => {
        const dataObj = new Date(item.data);
        const dia = String(dataObj.getDate()).padStart(2, '0');
        const mes = String(dataObj.getMonth() + 1).padStart(2, '0');
        const ano = dataObj.getFullYear();

        const dataFormatada = `${dia}/${mes}/${ano}`;
        const texto = `${dataFormatada} ${item.horario.substring(0,5)}`;
        const valor = `${item.data} ${item.horario}`;

        const option = document.createElement("option");
        option.name = 'dataEHorarioSelecionado';
        option.value = valor;
        option.textContent = texto;

        selectHorario.appendChild(option);
      });
    })
    .catch(() => {
      selectHorario.innerHTML = '<option>Erro ao carregar horários</option>';
    });
}

procedimentoSelect.addEventListener("change", (e) => {
  carregarHorarios(e.target.value);
});

document.addEventListener("DOMContentLoaded", () => {
  carregarHorarios(procedimentoSelect.value);
});
