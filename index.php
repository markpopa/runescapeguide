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
    <title>OSRS Questing Guide</title>
</head>
<body>

    <h1>Old School Runescape F2P Quest Guide</h1>

    <nav class="navbar">
        <ul>
            <li><img src="logo.png" alt=""></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <li><a href="quests.php">Quests</a></li>
            <li><a href="money.php">Money Making</a></li>
       </ul>
    </nav>

    <main class="content">
        <?php echo "<h2>Welcome $_SESSION[username]</h2>"?>
        <h3>Welcome to the Free 2 Play OSRS Quest Guide!!!</h3>
        <p>
        Welcome to our F2P OSRS questing hub! If you're diving into the world of Gielinor without a membership, you're in the right place. 
        Our website is all about helping you navigate through the exciting quests available in the Free-to-Play version of Old School RuneScape.
        From simple tasks like helping out in the kitchen to taking on legendary beasts, we've got guides and tips to make your journey smooth and enjoyable. So, grab your gear and get ready for some epic adventures!
        </p><br>
        <img src="Imp.webp"><br>
        <h3>Simple Guide</h3>
        <p>
        This website is designed with simplicity and minimalism in mind. 
        I've stripped away the clutter to provide you with a straightforward and easy-to-navigate OSRS F2P quest guide that also encourages exploring. 
        No unnecessary distractions, just the information you need to complete your quests efficiently.
        I've also designed it to maintain a more classic/old-school look to fit the game! (Also mobile friendly!)
        </p><br>
        <img src="delrith.webp"><br>
        <h3>Effective F2P money making</h3>
        <p>
        A problem you might encounter during your journey is money, but I have you covered!
        There are a lot of ways to make money as a F2P player but some require lots of time
        and might not even be worth it in the end. That's why I am going to share one of the most reliable
        and my most used method to make GP!
        </p>
        <img src="lavadragon.webp">
    </main>
    <footer>
        <p>RuneScape Old School is trademarked by Jagex Limited. I do not own any of the contents used XD</p>
    </footer>
</body>
</html>