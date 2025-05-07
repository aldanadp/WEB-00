
document.addEventListener("DOMContentLoaded", function (){
  const modal = document.getElementById("search-bar-about");
  const openBtn = document.getElementById("search-bar");
  const closeBtn = document.querySelector(".close");

  // Abrir modal

  openBtn.addEventListener("click", () => {
    modal.style.display = "flex";
    document.body.style.overflow = "hidden"; // Evita scroll de fondo
  });

  // Cerrar modal

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
    document.body.style.overflow = "auto"; // Vuelve a permitir scroll
  });

});