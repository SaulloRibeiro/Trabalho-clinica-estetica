const btnMenu = document.getElementById("menu-btn");
const sidebar = document.getElementById("sidebar");
const btnFecharMenu = document.getElementById("btn-fechar");

btnMenu.onclick = () =>{
    sidebar.classList.toggle("ativado");
}

btnFecharMenu.onclick = () =>{
    sidebar.classList.toggle("ativado");
}


