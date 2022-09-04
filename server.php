<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db"; //database  มี id, username, email, password 4ฟิลด์

    //Create Connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    //Check connection
    if(!$conn){
        die("Connection failed".mysqli_connect_error);
    }
?>
