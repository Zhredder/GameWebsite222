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