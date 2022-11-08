const btn = document.querySelector("#btn");
const barraLateral = document.querySelector(".barra-lateral");
const links = document.querySelectorAll(".nombre-link");

btn.addEventListener('click', () => {
    barraLateral.classList.toggle("mostrar");
    
    links.forEach(links => {
        links.classList.toggle("mostrar");
    });
})