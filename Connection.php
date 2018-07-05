<?php
    $connection = new mysqli("localhost","root","");
    if($connection->connect_error){
        echo "There is a problem while connecting to the Database<br>";
    } else {
        echo "The Connection has been esablished<br>";
    }
$connection = new mysqli("localhost","root","");
    if($selected_db) {
        echo "The Database has been selected.<br>";
    } else {
        echo "The database has not been selected<br>";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MYSQL Connection</title>
</head>
<body>

</body>
</html>