const elementoSelect = document.getElementById("procedimentoId");
const elementoInputParaMostrarPreco = document.getElementById("preco-procedimento-input");

function atualizarPreco(procedimento) {
  fetch(`/N1-final/classes/services/retornarPrecoService.php?procedimento=${encodeURIComponent(procedimento)}`)
    .then(response => {
      if (!response.ok) throw new Error('Erro na requisição');
      return response.text();
    })
    .then(preco => {
      elementoInputParaMostrarPreco.value = 'R$' + preco;
    })
    .catch(() => {
      elementoInputParaMostrarPreco.value = "Erro ao carregar preço";
    });
}

elementoSelect.addEventListener("change", e => {
    atualizarPreco(e.target.value);
});