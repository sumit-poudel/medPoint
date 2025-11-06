const userMenu = document.getElementById("user-menu-button");
const dropdownMenu = document.getElementById("user-dropdown");
userMenu.addEventListener("click", () => {
  dropdownMenu.classList.toggle("hidden");
});
dropdownMenu.addEventListener("mouseleave", () => {
  dropdownMenu.classList.toggle("hidden");
});

const profile = document.getElementById("profile");

// event listeners
profile.addEventListener("click", () => {
  ajaxComponent("profile");
});

// ajax component

function ajaxComponent(query) {
  var request = new XMLHttpRequest();
  let url = "profile.php?q=" + query;
  request.open("GET", url);
  request.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("profileContent").innerHTML = this.responseText;
    }
  };
  request.send();
}
