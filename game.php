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
    echo "<title>Vapor - " . $game->title . "</title>";
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
                <div class="search">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
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
                    <div class="img-sm">
                        <?php
                        if ($game->image != "") {
                            echo "<div class='img-container' style='background-image: url(" . $game->image . ");'></div>\n";
                        } else {
                            echo "<div class='img-container' style='background-image: url(images/logo.png);'></div>\n";
                        }
                        ?>
                    </div>
                    <?php
                    echo "<h1>" . $game->title . "</h1>\n";
                    echo "<p>Developer: " . $game->developer . "</p>\n";
                    echo "<p>Genre: " . $game->genre . "</p>\n";
                    echo "<p>Engine: " . $game->engine . "</p>\n";
                    echo "<p>Platforms: " . $game->platform . "</p>"
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