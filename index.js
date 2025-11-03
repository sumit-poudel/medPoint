const userMenu = document.getElementById("user-menu-button");
const dropdownMenu = document.getElementById("user-dropdown");
userMenu.addEventListener("mouseenter", () => {
  dropdownMenu.classList.toggle("hidden");
});
dropdownMenu.addEventListener("mouseleave", () => {
  dropdownMenu.classList.toggle("hidden");
});
