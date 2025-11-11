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
let cart = [];

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

function getCookies() {
  console.log(document.cookie);
}
getCookies();

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

const buttons = document.querySelectorAll(".cartButtons");
buttons.forEach((button) => {
  button.addEventListener("click", function (e) {
    const productId = e.srcElement.attributes.id.value;
    cart.push(productId);
    console.log(...cart);
  });
});
