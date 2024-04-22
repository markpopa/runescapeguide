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
    
    if (isset($_POST["login"])) {  
        if (empty($_POST["username"]) || empty($_POST["password"])) {  
            $message = 'All fields are required';  
        } else {  
            $query = "SELECT u.*, b.reason 
                      FROM users u 
                      LEFT JOIN banned b ON u.username = b.username 
                      WHERE u.username = :username AND u.password = :password";  
            $statement = $connect->prepare($query);  
            $statement->execute(array(  
                'username' => $_POST["username"],  
                'password' => $_POST["password"]  
            ));  
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                if ($user['reason']) {
                    $message = 'You are banned. Reason: ' . $user['reason'];
                } else {
                    $_SESSION["password"] = $_POST['password'];
                    $_SESSION["username"] = $_POST["username"];
                    header("location:index.php");
                }
            } else {  
                $message = 'Wrong Data. Invalid username/password combination';  
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
<body class="bodylog">  
    <?php  
    if (isset($message)) {  
        echo '<h1>' . $message . '</h1>';  
    }  
    ?>  
    <div class="log-image"></div>
    <main class="log">
    <h3>Log In</h3><br/>  
    <form class="login" method="post">
        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/><br><br>
        <input type="submit" name="login" id="login" value="Log In"/><br>
        <a href="signup.php">Click here to sign up!</a>
    </form>  
    </main>
</body> 
</html>
