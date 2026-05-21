<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>
<body>
    <?php 
        echo "WELCOME, {$_SESSION["username"]}";
    ?>

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
?>

