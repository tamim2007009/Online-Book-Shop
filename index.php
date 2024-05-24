<?php   
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM tam_table WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
   
} else {
    header("Location: login.php");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
<h1>Welcome <?php echo "Welcome " . $row["name"];?></h1>
<a href="logout.php">Logout</a>

</body>
</html>