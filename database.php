<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "first_db";
    $conn = "";
    
    $conn = mysqli_connect($db_server, $db_user,
                    $db_pass, $db_name);

    if(!$conn){
        echo "CONNECTION FAILED";
    } 



/*
CREATE TABLE `first_db`.`users` 
(`userID` INT(4) NOT NULL AUTO_INCREMENT , 
`username` VARCHAR(20) NOT NULL , 
`password` CHAR(255) NOT NULL , 
`color` CHAR(15) NOT NULL , 
`date_joined` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
PRIMARY KEY (`userID`), UNIQUE (`username`)) ENGINE = InnoDB;

*/
?>

