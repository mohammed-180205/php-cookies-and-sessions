<?php
session_start();
$color = $_COOKIE["color"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <style>
        body{
            background-color: <?php echo $color; ?>;
            
        }
        input{
            background-color: <?php echo $color; ?>;
            border: 1px solid black;
            border-radius: 5px;
            width: 80px;
            height: 30px;
        }
    </style>

</head>
<body>
    <h2><?php 
        echo "WELCOME, {$_SESSION["username"]}";
    ?></h2>
    

<form action="" method="post">
    <input type="submit" value="Logout" name = "logout">
</form>
    
</body>
</html>

<?php
if(isset($_POST["logout"])){
    session_destroy();
    header("Location:login.php");

}


include("database.php");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
echo $row["userid"] . "<br>";
echo $row["username"] . "<br>";
echo $row["password"] . "<br>";
echo $row["color"] . "<br>";
echo $row["date_joined"] . "<br>";
}

} else{
    echo "NO USER FOUND";
}



mysqli_close();
?>

