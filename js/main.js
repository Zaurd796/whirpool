window.addEventListener("DOMContentLoaded", function() {
  const button = document.querySelector("[data-button]");
  const menu = document.querySelector("[data-menu]");
  
  button.addEventListener("click", function() {
    menu.classList.toggle("open");
    this.classList.toggle("open");
  });
});