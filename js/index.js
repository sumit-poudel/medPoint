function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}

const searchBar = document.getElementById("searchBar");
const searchButton = document.getElementById("searchButton");
const clear = document.getElementById("clear");

const performSearch = () => {
  if (searchBar.value !== "") {
    let request = new XMLHttpRequest();
    request.open("GET", "search.php?query=" + searchBar.value);
    request.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        document.getElementById("searchResult").innerHTML = this.responseText;
      }
    };
    request.send();
  } else {
    document.getElementById("searchResult").innerHTML = "";
  }
};

const cart = (id, username, event) => {
  var request = new XMLHttpRequest();
  request.open("GET", "cart.php?user=" + username + "&id=" + id);
  request.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      clearTimeout(timeout);
      event.target.innerText = "Added!!"
      timeout = setTimeout(() => {
        event.target.innerText = "Add to cart"
      }, 500);
    }
  };
  request.send();
}

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
  button.addEventListener("click", function (event) {
    const username = getCookie("username");
    cart(event.target.id, username, event);
  });
});
