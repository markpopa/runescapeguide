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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['username'];
        $pass = $_POST['password']; 
        
        if (empty($_POST["username"]) || empty($_POST["password"])) {  
            $message = 'All fields are required';  
        } else {
            $sql = "INSERT INTO users (username, password) 
            VALUES ('$user', '$pass')";
            if ($connect->exec($sql)) {
                echo "<h1>Sign Up Succesful</h1>";
            } else {
                echo "<h1>Sign Up error</h1>";
            }

        }
    }
} catch (PDOException $error) {  
    $message = $error->getMessage();  
}  
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>  
    <?php  
    if (isset($message)) {  
        echo '<h1>' . $message . '</h1>';  
    }  
    ?>  
    <h3>Sign Up</h3><br/>  
    <form class="signup" action="signup.php" method="post">
        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/><br><br>
        <button type="submit">Submit</button><br>
        <a href="login.php">Log In</a>
    </form>  
</body> 
</html>
