<?php
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "relog");

    // Check connection
    if(!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Check for duplicate username
    $duplicate_username = mysqli_query($conn, "SELECT * FROM tam_table WHERE username='$username'");
    // Check for duplicate email
    $duplicate_email = mysqli_query($conn, "SELECT * FROM tam_table WHERE email='$email'");

    if(mysqli_num_rows($duplicate_username) > 0){
        echo "<script>alert('Username already exists');</script>";
    } elseif(mysqli_num_rows($duplicate_email) > 0){
        echo "<script>alert('Email already exists');</script>";
    } else {
        if($password == $cpassword){
            // Hash the password before storing it
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO tam_table (name, username, email, password) VALUES ('$name', '$username', '$email', '$hashed_password')";
            
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('Registration Successful');</script>";
            } else {
                echo "<script>alert('Registration Failed');</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match');</script>";
        }
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
    
<h2>Registration</h2>
<form action="index.php" method="POST" autocomplete="off">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="cpassword">Confirm Password:</label>
    <input type="password" id="cpassword" name="cpassword" required><br><br>
    
    <input type="submit" name="submit" value="Register">
</form>
<br>
<a href="login.php">Login</a>

</body>
</html>
