<?php
require 'config.php';
if(isset($_POST["submit"])){
    $usernameormail = $_POST["usernameormail"];
    $password = $_POST["password"];
    
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "relog");
    
    // Check connection
    if(!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    // Check if the username or email exists
    $sql = "SELECT * FROM tam_table WHERE username='$usernameormail' OR email='$usernameormail'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];
        
        if(password_verify($password, $hashed_password)){
            echo "<script>alert('Login Successful');</script>";
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            
            header("Location: index.php");
        } else {
            echo "<script>alert('Incorrect Password');</script>";
        }
    } else {
        echo "<script>alert('Username or Email does not exist');</script>";
    }
    
    // Close connection
    mysqli_close($conn);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST" autocomplete="off">
        <label for="usernameormail">Username or Email:</label>
        <input type="text" id="usernameormail" name="usernameormail" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" name="submit" value="Login">

        <br>
        <a href="registration.php">Register</a>
</body>
</html>