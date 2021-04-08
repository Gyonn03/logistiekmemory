<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_unity";

$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

$sql = "SELECT username from tb_users where username = '" . $loginUser ."'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Username is already taken.";
}else{
    echo "Create User";

    $sql = "INSERT INTO tb_users (username, password)
    VALUES ('" . $loginUser ."', '" . $loginPass ."')";
    if($conn->query($sql) === TRUE){
        $sql = "SELECT id From tb_users WHERE username = $username";
        $conn->query($sql);
        $result = $conn->query($sql);
        $sql = "INSERT INTO tb_data ()
        VALUES ()";
        $conn->query($sql);
        echo "New record created Succesfully";

    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
$conn->close();
?> 