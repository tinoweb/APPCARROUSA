document.addEventListener('DOMContentLoaded', function() {
    var sideMenu = document.getElementById('sideMenu');

    // Adiciona evento de clique ao documento
    document.addEventListener('click', function(event) {
        if (!sideMenu.contains(event.target) && !document.getElementById('menuToggle').contains(event.target)) {
            sideMenu.classList.remove('open');
        }
    });

    // Adiciona evento de clique ao botão do menu hambúrguer para abrir o menu
    document.getElementById('menuToggle').addEventListener('click', function() {
        sideMenu.classList.toggle('open');
    });
});