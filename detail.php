<?php

session_start();
if (!isset($_SESSION['password']) || !isset($_SESSION['username'])) {
    header("location: login.php");
}

$host = "localhost";
$username = "bit_academy";
$password = " ";
$dbname = "runescape";
$message = "";  

try {  
    $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);  
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $error) {  
    $message = $error->getMessage();  
}  

$id = $_GET['id'];

$query = $connect->prepare("SELECT * FROM quests WHERE quest_id =$id");
$query->execute();

foreach ($query as $quest) {
    $quest_name = $quest['quest_name'];
    $quest_description = $quest['quest_description'];
    $quest_guide = $quest['quest_guide'];
    $quest_start = $quest['quest_start'];
    $quest_reward = $quest['quest_reward'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quest Guide</title>
</head>
<body class="bodyquests">

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

    <h1><?php echo $quest_name; ?></h1>

    <h3><?php echo $quest_description; ?></h3>

    <main class="content">
        <img src="<?php echo$quest_start; ?>">
        <p>
            <?php echo $quest_guide; ?>
        </p>
        <img src="<?php echo$quest_reward; ?>">
    </main>
</body>
</html>