<?php
session_start();


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
        body{
            background-color: #fff5d7;
        }
    </style>
</head>
<body>
<h2>LOGIN PAGE</h2>

<form action="" method="post">

Name: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>

 <label for="color">Color of the dashboard:</label>
 <select name="color" id="color">
    <option value="#fceed1">TAN</option>
    <option value="#a0d2eb">BLUE</option>
    <option value="#8458B3">PURPLE</option>
 </select>
 
 


<input type="submit" value="submit" name="submit">



</form>

    
</body>
</html>

<?php
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["username"]) || empty($_POST["password"])){
        echo "Name and/or Password missing!!";
    } else if(empty($_POST["color"])){
        echo "You gotta choose a color!";
    } else{
        setcookie("color",$_POST["color"], (time() + (86400*7)), "/" );
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];
        $color = $_POST["color"];
        $_SESSION["username"] = $username;
        header("Location:dashboard.php");
        include("database.php");

$sql = "INSERT INTO users (username,password,color)
VALUES ('$username', '$password', '$color')";

mysqli_query($conn,$sql);


mysqli_close($conn);
    }
        
    } 


?>