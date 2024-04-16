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
    
</body>
</html>