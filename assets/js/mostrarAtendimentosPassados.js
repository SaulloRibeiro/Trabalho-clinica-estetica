document.addEventListener("DOMContentLoaded", function () {
    const inputData = document.getElementById("dataId");
    const tabela = document.querySelector("table");

    inputData.addEventListener("change", function () {
        const dataSelecionada = this.value;

        if (!dataSelecionada) return;

        fetch(`/N1-final/classes/services/retornarAtendimentosService.php?dataSelecionada=${encodeURIComponent(dataSelecionada)}`)
            .then(response => response.json())
            .then(dados => {
                // Limpa as linhas antigas, mantendo só o cabeçalho
                const linhasAntigas = tabela.querySelectorAll("tr:not(:first-child)");
                linhasAntigas.forEach(linha => linha.remove());

                if (dados.length === 0) {
                    const linha = tabela.insertRow();
                    const cell = linha.insertCell();
                    cell.colSpan = 5;
                    cell.innerText = "Nenhum atendimento encontrado para esta data.";
                    cell.style.textAlign = "center";
                } else {
                    dados.forEach(item => {
                        const linha = tabela.insertRow();
                        linha.insertCell().innerText = item.nome_cliente;
                        linha.insertCell().innerText = item.email_cliente;
                        linha.insertCell().innerText = item.telefone_cliente;
                        linha.insertCell().innerText = item.nome_procedimento;
                        linha.insertCell().innerText = item.horario;
                    });
                }
            })
            .catch(error => {
                console.error("Erro ao buscar atendimentos:", error);
            });
    });
});

