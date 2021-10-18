<!DOCTYPE html>
<html lang="en">

<?php

$gameID = $_GET["id"];
$title = $gameID;

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo "<title>Vapor - " . $title . "</title>";
    ?>
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



    <footer>
        <div class="container">
            <p>Footer text</p>
        </div>
    </footer>
</body>

</html>