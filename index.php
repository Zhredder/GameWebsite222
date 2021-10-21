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
    <!--Games Section-->
<div class="Catalogue">

<div class="games-collection">
    <div class="game-image">
         <img src="Images/batman.jpg">
            </div>
<div class="title">
<h1>Batman: Arkham Knight </h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div>    




<div class="games-collection">
    <div class="game-image">
         <img src="Images/gta.jpg">
            </div>
<div class="title">
<h1>GTA: 5 </h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div>   
 
 <div class="games-collection">
    <div class="game-image">
         <img src="Images/fortnite.jpg">
            </div>
<div class="title">
<h1>Fortnite </h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 


 <div class="games-collection">
    <div class="game-image">
         <img src="Images/fifa.jpg">
            </div>
<div class="title">
<h1>FIFA 22 </h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 


 <div class="games-collection">
    <div class="game-image">
         <img src="Images/watchdogs.jpg">
            </div>
<div class="title">
<h1>Watch Dogs </h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 



 <div class="games-collection">
    <div class="game-image">
         <img src="Images/valorant.jpg">
            </div>
<div class="title">
<h1>Valorant </h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 


 <div class="games-collection">
    <div class="game-image">
         <img src="Images/sleepingdogs.jpg">
            </div>
<div class="title">
<h1>Sleeping Dogs </h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 


 <div class="games-collection">
    <div class="game-image">
         <img src="Images/sot.jpg">
            </div>
<div class="title">
<h1>Sea Of Thieves</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 


 <div class="games-collection">
    <div class="game-image">
         <img src="Images/dishonored.jpg">
            </div>
<div class="title">
<h1>Dishonored</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 


 <div class="games-collection">
    <div class="game-image">
         <img src="Images/witcher.jpg">
            </div>
<div class="title">
<h1>Witcher 3</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 


<div class="games-collection">
    <div class="game-image">
         <img src="Images/factorio.jpg">
            </div>
<div class="title">
<h1>Factorio</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 

 <div class="games-collection">
    <div class="game-image">
         <img src="Images/justcause.jpg">
            </div>
<div class="title">
<h1>Just Cause 3</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 

 <div class="games-collection">
    <div class="game-image">
         <img src="Images/hotlinemiami.jpg">
            </div>
<div class="title">
<h1>Hotline Miami</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 

 <div class="games-collection">
    <div class="game-image">
         <img src="Images/doom.jpg">
            </div>
<div class="title">
<h1>Doom Eternal</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 

 <div class="games-collection">
    <div class="game-image">
         <img src="Images/kerbalspaceprogram.jpg">
            </div>
<div class="title">
<h1>Kerbal Space Program</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 

 <div class="games-collection">
    <div class="game-image">
         <img src="Images/assassinscreed.jpg">
            </div>
<div class="title">
<h1>Assassins Creed Valhalla</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 

 <div class="games-collection">
    <div class="game-image">
         <img src="Images/hitman.jpg">
            </div>
<div class="title">
<h1>Hitman 3</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 

 
 <div class="games-collection">
    <div class="game-image">
         <img src="Images/heavyrain.jpg">
            </div>
<div class="title">
<h1>Heavy Rain</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 



 
 <div class="games-collection">
    <div class="game-image">
         <img src="Images/portal.jpg">
            </div>
<div class="title">
<h1>Portal</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 

 
 <div class="games-collection">
    <div class="game-image">
         <img src="Images/dyinglight.jpg">
            </div>
<div class="title">
<h1>Dying Light</h1>
    </div>

<div class="play-button">   
<button>Play!</button>
</div>   
 </div> 










            </div>

<!--Games Section End-->

    <footer>
        <div class="container">
            <p>Footer text</p>
        </div>
    </footer>

    <script src="js/slideshow.js"></script>
</body>

</html>