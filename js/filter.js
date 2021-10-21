// Sort
var sortSelect = document.getElementById("sort-select");
var gamesList = document.getElementById("games-list");

sortSelect.addEventListener("change", sortSelected);
sortSelected();

function sortSelected() {
    // Convert HTML Collection to array
    var games = Array.prototype.slice.call(gamesList.children);
    // Sort array
    if (sortSelect.value == "title")
        games.sort(sortTitle);
    else if (sortSelect.value == "developer")
        games.sort(sortDeveloper);
    else if (sortSelect.value == "genre")
        games.sort(sortGenre);
    else if (sortSelect.value == "engine")
        games.sort(sortEngine);

    // Reatach the sorted elements
    for (let i = 0; i < games.length; i++) {
        // Detach and reattach element
        var item = gamesList.removeChild(games[i]);
        gamesList.appendChild(item);
    }
}

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