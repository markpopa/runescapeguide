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
    <title>Map Info</title>
</head>
<body>

    <h1>Map Info</h1>

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

    <main class="map">
        <h3>Lumbridge</h3>
        <p>
            As one of the first places players encounter upon entering the world of Gielinor, Lumbridge serves as a hub for adventurers. Home to a castle, shops, banks, and various NPCs,
            Lumbridge is a bustling town teeming with activity. It also boasts the iconic Lumbridge Castle, where new players often begin their quests and training.
        </p>
        <img src="map/lumbridge.png">
        <h3>Varrock</h3>
        <p>
            Varrock is the bustling capital city of the free world, offering a myriad of activities for players to engage in.
            From its bustling market square to the iconic Varrock Palace, there's never a dull moment in this vibrant city.
            Varrock also houses essential facilities such as banks, shops, and the iconic Grand Exchange, where players can buy and sell goods.
        </p>
        <img src="map/varrock.png">
        <h3>Falador</h3>
        <p>
            Known for its vast white walls and towering castle, Falador exudes a sense of strength and tradition.
            This city is a central hub for mining and smithing activities, with the famous Mining Guild located just south of its walls. Falador also offers various shops, guilds, and quests for adventurers to undertake.
            Remember 06/06/2006.
        </p>
        <img src="map/falador.png">
        <h3>Draynor Village</h3>
        <p>
            Situated south of Lumbridge, Draynor Village is a quaint settlement known for its peaceful atmosphere. However, beneath its tranquil facade lies the mysterious Draynor Manor, rumored to be haunted by dark forces.
            Draynor Village serves as a starting point for several quests and offers essential amenities for players.
        </p>
        <img src="map/village.png">
        <h3>Al Kharid</h3>
        <p>
            Located to the east of Lumbridge, Al Kharid is a desert city renowned for its bustling market and rich cultural heritage.
            The city offers various amenities, including shops, a bank, and a furnace. Al Kharid also serves as a gateway to the expansive desert region, where players can embark on desert adventures and undertake quests.
        </p>
        <img src="map/alkharid.png">
        <h3>Wilderness</h3>
        <p>
            For those seeking a more perilous adventure, the Wilderness beckons with its untamed wilderness and high-risk, high-reward gameplay. 
            This lawless region is fraught with danger, from aggressive monsters to rival players eager for PvP combat. The Wilderness offers unique resources, dungeons, and challenges for daring adventurers willing to brave its dangers.
        </p>
        <img src="map/wilderness.png">

    </main>
    
</body>
</html>