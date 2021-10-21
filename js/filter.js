// Get games list
var gamesList = document.getElementById("games-list");

// Convert HTML Collection to array
var games = Array.prototype.slice.call(gamesList.children);

// Sort array
games.sort(sortGenre);

function sortTitle(a, b) {
    return a.dataset.title.localeCompare(b.dataset.title);
};

function sortDeveloper(a, b) {
    return a.dataset.developer.localeCompare(b.dataset.developer);
};

function sortGenre(a, b) {
    return a.dataset.genre.localeCompare(b.dataset.genre);
};

function sortEngine(a, b) {
    return a.dataset.engine.localeCompare(b.dataset.engine);
};

// Reatach the sorted elements
for (var i = 0; i < games.length; i++) {
    // Detach and reattac element
    var item = gamesList.removeChild(games[i]);
    gamesList.appendChild(item);
}


// Platform filter
var platformSelect = document.getElementById("platform-select");
var gamesList = document.getElementById("games-list");

platformSelect.addEventListener("change", platformFilter);

function platformFilter() {
    var games = gamesList.children;
    var filter = platformSelect.value.toLowerCase();

    for (let i = 0; i < games.length; i++) {
        // Compare the game platform to the filter
        var text = games[i].dataset.platform.toLowerCase();
        if (text.indexOf(filter) > -1) {
            games[i].classList.remove("hide");
        } else {
            games[i].classList.add("hide");
        }
    }
}


// Search filter
var input = document.getElementById("search");
var gamesList = document.getElementById("games-list");

input.addEventListener("keyup", search);

function search() {
    var games = gamesList.children;
    var filter = input.value.toLowerCase();

    for (let i = 0; i < games.length; i++) {
        // Compare text inside the element to the filter
        var text = games[i].innerText.toLowerCase();
        if (text.indexOf(filter) > -1) {
            games[i].style.display = "";
        } else {
            games[i].style.display = "none";
        }
    }
}