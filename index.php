<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Vapour</title>
</head>

<body>
    <header>
        <img src="images/logo.png" class="logo">
        <!--Navigation Bar-->
        <nav>

        </nav>
        <!--Navigation Bar End-->


        <!--Search Bar-->
        <div class="search">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>


        </div>
        <!--Search Bar End-->
    </header>

    <section>
        <div class="container">
            <div class="slideshow">
                <div class="slide-container">
                    <div class="slide" style="background-image: url(images/logo.png);"></div>
                    <div class="slide" style="background-image: url(images/logo.png);"></div>
                    <div class="slide" style="background-image: url(images/logo.png);"></div>
                </div>
                <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                <a class="next" onclick="changeSlide(1)">&#10095;</a>
                <br>
                <div class="dot-container">
                    <span class="dot" onclick="setSlide(0)"></span>
                    <span class="dot" onclick="setSlide(1)"></span>
                    <span class="dot" onclick="setSlide(2)"></span>
                </div>
            </div>
        </div>
    </section>


    <!--Games Section-->



    <!--Games Section End-->


    <script src="js/slideshow.js"></script>
</body>

</html>