<!DOCTYPE html>
<html lang="en">

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

    <section id="banner">
        <div class="container">
            <div class="slideshow">
                <div class="slide-container">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        echo "<div class='slide' style='background-image: url(images/logo.png);'></div>\n";
                    }
                    ?>

                </div>
                <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                <a class="next" onclick="changeSlide(1)">&#10095;</a>
                <br>
                <div class="dot-container">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
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
                for ($i = 0; $i < 20; $i++) {
                    echo "<div class='col-12 col-md-6 col-lg-4 col-xl-3 game'>\n";
                    echo "<a href='game.php?id=" . $i . "'>Game</a>\n";
                    echo "</div>\n";
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