<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Equestria The Game</title>
    <link rel="icon" href="img/etg.jpg">
    <link rel="stylesheet" type="text/css" href="css/Main.css">
</head>
<body>

    <!-- header element -->
    <header>
        <nav>
            <li class="horizontal"><a class = header . href="index.php">Home</a></li>
            <li class="horizontal"><a class = header . href="Downloads.php">Downloads</a></li>
            <li class="horizontal"><a class = header . href="Leaderboards.php">Leaderboards</a></li>
            <li class="horizontal"><a class = header . href="Game Lore.php">Game Lore</a></li>
            <input type="text" name="searchprofile" placeholder="Search profiles...">
            <?php 
                if (isset($_SESSION["useruid"])) { #check if user is logged in
                    echo "<li class='horizontal'><transform><a class = header . href='Profile.php'>Profile</a>
                    <br><a class = header . href='includes/logout.inc.php'>Log out</a></transform></li>";
                }
                else {
                    echo "<li class='horizontal'><transform><a class = header . href='login.php'>Login</a>
                    <br><a class = header . href='signup.php'>Sign Up</a></transform></li>";
                }
            ?>
        </nav>
    </header>
