const userMenu = document.getElementById("user-menu-button");
const dropdownMenu = document.getElementById("user-dropdown");
userMenu.addEventListener("mouseenter", () => {
  dropdownMenu.classList.toggle("hidden");
});
dropdownMenu.addEventListener("mouseleave", () => {
  dropdownMenu.classList.toggle("hidden");
});

const searchBar = document.getElementById("searchBar");
const searchButton = document.getElementById("searchButton");
const clear = document.getElementById("clear");

const performSearch = () => {
  if (searchBar.value != "") {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("searchResult").innerHTML = this.responseText;
        window.history.pushState("", "", "?search=" + searchBar.value);
      }
    };
    xmlhttp.open("GET", "search.php?query=" + searchBar.value, true);
    xmlhttp.send();
  } else {
    document.getElementById("searchResult").innerHTML = "";
  }
};

// event listeners
clear.addEventListener("click", () => {
  searchBar.value = "";
  document.getElementById("searchResult").innerHTML = "";
  window.history.pushState("", "", "/medpoint/");
});
searchButton.addEventListener("click", performSearch);
searchBar.addEventListener("keydown", (e) => {
  if (e.key === "Enter") {
    performSearch();
  }
});
