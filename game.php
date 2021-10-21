<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<?php
$gameID = $_GET["id"];
$filename = 'catalog.xml';
if (file_exists($filename)) {
    $catalog = simplexml_load_file($filename);
    $game = $catalog->xpath("//game[@id='" . $gameID . "']")[0];
} else {
    exit("Failed to open " . $filename);
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo "<title>Vapour - " . $game->title . "</title>\n";
    ?>
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
                <div class="nav-list">
                    <a href=".">Home</a>
                    <?php
                    echo "<a href='game.php?id=" . random_int(1, 20) . "'>Random Game</a>";
                    ?>
                </div>
            </nav>
        </div>
    </header>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 video">
                    <div class="video-resize">
                        <div>
                            <?php
                            echo '<iframe src="' . $game->video . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <?php
                    echo "<img class='img-100' src='" . $game->image . "'>\n";
                    ?>
                    <?php
                    echo "<h1>" . $game->title . "</h1>\n";
                    echo "<p>Developer: " . $game->developer . "</p>\n";
                    echo "<p>Genre: " . $game->genre . "</p>\n";
                    echo "<p>Engine: " . $game->engine . "</p>\n";
                    echo "<p>Platforms: " . $game->platform . "</p>\n"
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>


    <!-- <footer>
        <div class="container">
            <p>Footer text</p>
        </div>
    </footer> -->
</body>

</html>