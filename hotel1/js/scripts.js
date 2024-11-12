const sidebar = document.querySelector(".sidebar");
const bars = document.getElementById("menu-toggle");
const body = document.querySelector("body");

// Alterna la clase "active" para abrir y cerrar el sidebar cuando se hace clic en el ícono de barras
bars.addEventListener("click", function (event) {
    sidebar.classList.toggle("active");
    event.stopPropagation(); // Evita que el clic en el ícono active el clic en el body
});

// Detecta clics en cualquier parte del body (fuera del sidebar)
body.addEventListener("click", function (event) {
    // Verifica que el clic no sea dentro del sidebar ni en el ícono de barras
    if (sidebar.classList.contains("active") && !sidebar.contains(event.target) && !bars.contains(event.target)) {
        sidebar.classList.remove("active"); // Cierra el sidebar
    }
});
