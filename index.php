<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vapour - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="fontawesome/js/all.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <a href=".">
                    <img src="images/logo.png" class="logo">
                </a>
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
            </nav>
        </div>
    </header>

    <section id="banner" class="section-padding">
        <div class="container">
            <div class="slideshow">
                <div class="slide-container">
                    <?php
                    $randomMax = 8;
                    $filename = 'catalog.xml';
                    if (file_exists($filename)) {
                        $catalog = simplexml_load_file($filename);
                        for ($i = 0; $i < $randomMax; $i++) {
                            $num[$i] = rand(0, $catalog->count() - 1);
                        }
                        foreach ($num as $i) {
                            $game = $catalog->children()[$i];
                            echo "<a href='game.php?id=" . $game['id'] . "'>";
                            echo "<div class='slide' style='background-image: url(" . $game->image . ");'></div>\n";
                            echo "</a>\n";
                        }
                    } else {
                        exit("Failed to open " . $filename);
                    }
                    ?>
                </div>
                <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                <a class="next" onclick="changeSlide(1)">&#10095;</a>
                <br>
                <div class="dot-container">
                    <?php
                    for ($i = 0; $i < $randomMax; $i++) {
                        echo "<span class='dot' onclick='setSlide(" . $i . ")'></span>\n";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="games" class="section-padding">
        <div class="container">
            <div class="filter-container">
                <div class="filter">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="filter">
                    <label for="sort-select">Sort</label>
                    <select name="sort-select" id="sort-select">
                        <option value="title" selected>Title A-Z</option>
                        <option value="developer">Developer A-Z</option>
                        <option value="genre">Genre A-Z</option>
                        <option value="engine">Engine A-Z</option>
                    </select>
                </div>
                <div class="filter">
                    <label for="platform-select">Platform: </label>
                    <select name="platform-select" id="platform-select">
                        <option value="all" selected>All</option>
                        <option value="Windows">Windows</option>
                        <option value="mac">macOS</option>
                        <option value="Linux">Linux</option>
                        <option value="Playstation">Playstation</option>
                        <option value="Xbox">Xbox</option>
                    </select>
                </div>
            </div>
            <div id="games-list" class="row">
                <?php
                foreach ($catalog->children() as $game) {
                    echo "<div class='col-12 col-md-6 col-lg-4 col-xl-3 game' 
                    data-title='" . $game->title . "' data-developer='" . $game->developer . "' data-genre='" . $game->genre . "' 
                    data-engine='" . $game->engine . "' data-platform='" . $game->platform . "'>\n";
                    echo "<a href='game.php?id=" . $game['id'] . "' class=''>";
                    if ($game->image != "") {
                        echo "<img src='" . $game->image . "'>";
                    } else {
                        echo "<img src='images/logo.png'>";
                    }
                    echo "<p><span class='h2'>" . $game->title . "</span><br>" . $game->genre . "</p>";
                    echo "</a>\n</div>\n";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- <footer>
        <div class="container">
            <p>Footer text</p>
        </div>
    </footer> -->

    <script src="js/slideshow.js"></script>
    <script src="js/filter.js"></script>
</body>

</html>