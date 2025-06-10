function mascaraTelefone(input){
    input.value = input.value.replace(/^(\d{2})(\d{5})(\d{0,4})/, "($1) $2-$3");
}