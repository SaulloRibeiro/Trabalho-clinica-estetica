const btnMenu = document.getElementById("menu-btn");
const sidebar = document.getElementById("sidebar");
const overlay = document.getElementById("overlay");

btnMenu.onclick = () =>{
    sidebar.classList.toggle("ativado");
    overlay.classList.toggle("hidden");
}


