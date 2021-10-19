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
                <img src="images/logo.png" class="logo">
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
                    $filename = 'catalog.xml';
                    if (file_exists($filename)) {
                        $catalog = simplexml_load_file($filename);
                        foreach ($catalog->children() as $game) {
                            echo "<a href='game.php?id=" . $game['id'] . "'>";
                            if ($game->image) {
                                echo "<div class='slide' style='background-image: url(" . $game->image . ");'></div>\n";
                            } else {
                                echo "<div class='slide' style='background-image: url(images/logo.png);'></div>\n";
                            }
                            echo "</a>\n";
                        }
                    } else {
                        exit("Failed to open catalog.xml");
                    }
                    ?>
                </div>
                <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                <a class="next" onclick="changeSlide(1)">&#10095;</a>
                <br>
                <div class="dot-container">
                    <?php
                    for ($i = 0; $i < $catalog->count(); $i++) {
                        echo "<span class='dot' onclick='setSlide(" . $i . ")'></span>\n";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="games" class="section-padding">
        <div class="container">
            <div class="row">
                <?php
                foreach ($catalog->children() as $game) {
                    echo "<div class='col-12 col-md-6 col-lg-4 col-xl-3 game'>\n";
                    echo "<a href='game.php?id=" . $game['id'] . "' class=''>";
                    if ($game->image) {
                        echo "<img src='" . $game->image . "'>";
                    } else {
                        echo "<img src='images/logo.png'>";
                    }
                    echo "<p>" . $game->title . "</p>";
                    echo "</a>\n</div>\n";
                }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>Footer text</p>
        </div>
    </footer>

    <script src="js/slideshow.js"></script>
</body>

</html>