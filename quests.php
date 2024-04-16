<?php 

session_start();

$host = "localhost";
$username = "bit_academy";
$password = " ";
$dbname = "runescape";
$message = "";  

try {  
    $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);  
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    $Query = $connect->prepare("SELECT * FROM quests");
    $Query->execute();
    
} catch (PDOException $error) {  
    $message = $error->getMessage();  
}  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        tr, th, td {
            border: 2px solid black;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quests</title>
</head>
<body>

    <h1>F2P Quest List</h1>

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

    <main>
    <h2>Quests</h2>
    <table>
        <tr>
            <th>Quest Name</th>
            <th>Description</a></th>
            <th>Details</th>
        </tr>
        <?php foreach ($Query as $quests) { ?>
            <tr>
                <td><?php echo $quests["quest_name"]; ?></td>
                <td><?php echo $quests["quest_description"]; ?></td>
                <td><a href='detail.php?id=<?php echo $quests['quest_id']; ?>'>View Details</a></td>
            </tr>
        <?php } ?>
    </table>
    </main>
    
</body>
</html>