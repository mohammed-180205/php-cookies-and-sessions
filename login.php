<?php
session_start();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
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
if(isset($_POST["submit"])){
    if(empty($_POST["username"]) || empty($_POST["password"])){
        echo "Name and/or Password missing!!";
    } else if(isset($_POST["color"])){
        echo "You gotta choose a color!";
    }
        setcookie("color",$_POST["color"], (time() + (86400*7)), "/" );
        
        $_SESSION["username"] = $_POST["username"];
        header("Location:dashboard.php");
    } 
    
 


?>