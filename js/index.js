const userMenu = document.getElementById("user-menu-button");
const dropdownMenu = document.getElementById("user-dropdown");
userMenu.addEventListener("click", () => {
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
    var request = new XMLHttpRequest();
    request.open("GET", "search.php?query=" + searchBar.value);
    request.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("searchResult").innerHTML = this.responseText;
      }
    };
    request.send();
  } else {
    document.getElementById("searchResult").innerHTML = "";
  }
};

// event listeners
clear.addEventListener("click", () => {
  searchBar.value = "";
  document.getElementById("searchResult").innerHTML = "";
});
searchButton.addEventListener("click", performSearch);
searchBar.addEventListener("keydown", (e) => {
  if (e.key === "Enter") {
    performSearch();
  }
});
