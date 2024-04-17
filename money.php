<?php 

session_start();
if (!isset($_SESSION['password']) || !isset($_SESSION['username'])) {
    header("location: login.php");
}

$host = "localhost";
$username = "bit_academy";
$password = " ";
$dbname = "runescape";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Databasefout: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Making</title>
</head>
<body>
    
    <h1>Money Making</h1>

    <nav class="navbar">
        <ul>
            <li><img src="logo.png" alt=""></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <li><a href="quests.php">Quests</a></li>
            <li><a href="money.php">Money Making</a></li>
            <li><a href="info.php">Map Info</a></li>
       </ul>
    </nav>


    <main class="gp">
    <h2>Safe Methods</h2>
    <h3>Mining Iron Ore</h3>
    <p>Probably the safest one in the game is mining iron ores and selling them at the grand exchange.
        Altough you do need at least level 15 in mining but that should only take you about an hour or so to achieve so you can use this method very early on
        to make some quick and easy GP.
    </p>
    <img src="Iron_ore_detail.webp">
    <h3>Smelting Iron Bars</h3>
    <p>You could either sell the iron ore, or smelt it to make iron bars. 
        Even though it might not be as profitable, it will also help you farm XP for Smithing,
        wich could be useful later on, such as smithing your own armor! A Ring of forging
        is recommended because, if a player smelts iron ore while wearing the ring, it gives a 100% success rate of creating an iron bar.
    </p>
    <img src="Iron_bar_detail.webp">
    <h3>Killing imps</h3>
    <p>If you've completed the Imp Catcher quest you would know how profitable this can end up being.
        The drop rates on their beads is pretty rare, about 1 in 25 for any one of them. Because of the drop rates, some people 
        doing the Imp Catcher quest might become impaitent and go to the grand exchange to buy them. That's why you will farm imps for beads and then proceed to sell them at the grand exchange.
    </p>
    <img src="Imp.webp"><br>
    <h2>Risky Method</h2>
    <h3>Killing Lava Dragons</h3>
    <p>This method is the one I have used the most and the method I used to get my first million!
        It is very profitable but at the same time VERY RISKY! Why? Well that's because you have to venture out 
        pretty deep inside the wilderness. The wilderness is an area on the map where PVP (Player vs Player combat) is enabled. If you die you lose your items.
        That's why this method is risky. Each dragon drops lava dragon bones and black dragonhide wich together sell for almost 8k gp right now. But, there is a chance you get a rare drop,
        like Onyx bolt tips! Wich currently sell for 100k!
    </p>
    <img src="lavadragon.webp">
    </main>
    <footer>
        <p>RuneScape Old School is trademarked by Jagex Limited. I do not own any of the contents used XD</p>
    </footer>
</body>
</html>