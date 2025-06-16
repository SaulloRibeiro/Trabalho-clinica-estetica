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

      const agora = new Date();

      const horariosFiltrados = disponibilidades.filter(item => {
        const dataHoraStr = `${item.data}T${item.horario}`;
        const dataHora = new Date(dataHoraStr);
        return dataHora >= agora;
      });

      console.log("Horários após filtro:", horariosFiltrados);

      if (horariosFiltrados.length === 0) {
        const option = document.createElement("option");
        option.value = "";
        option.textContent = "Sem horários disponíveis";
        option.disabled = true;
        option.selected = true;
        selectHorario.appendChild(option);
        return;
      }

      horariosFiltrados.forEach(item => {
        const dataObj = new Date(`${item.data}T${item.horario}`);
        const dia = String(dataObj.getDate()).padStart(2, '0');
        const mes = String(dataObj.getMonth() + 1).padStart(2, '0');
        const ano = dataObj.getFullYear();
        const hora = String(dataObj.getHours()).padStart(2, '0');
        const minuto = String(dataObj.getMinutes()).padStart(2, '0');

        const dataFormatada = `${dia}/${mes}/${ano}`;
        const texto = `${dataFormatada} ${hora}:${minuto}`;
        const valor = `${item.data} ${item.horario}`;

        const option = document.createElement("option");
        option.name = 'dataEHorarioSelecionado';
        option.value = valor;
        option.textContent = texto;

        selectHorario.appendChild(option);
      });
    })
    .catch((error) => {
      console.error("Erro ao carregar horários:", error);
      selectHorario.innerHTML = '<option>Erro ao carregar horários</option>';
    });
}

procedimentoSelect.addEventListener("change", (e) => {
  carregarHorarios(e.target.value);
});

document.addEventListener("DOMContentLoaded", () => {
  carregarHorarios(procedimentoSelect.value);
});
