document.querySelector('.toggle-btn').addEventListener('click', function() {
    const sideMenu = document.querySelector('.side-menu-content');
    if (sideMenu.style.display === 'block') {
        sideMenu.style.display = 'none';
    } else {
        sideMenu.style.display = 'block';
    }
})

function buscarReceita() {
    const query = document.getElementById('searchQuery').value;
    if (query) {
        window.location.href = 'resultados_busca.php?query=' + encodeURIComponent(query);
    } else {
        alert('Por favor, insira um termo de busca.');
    }
};
