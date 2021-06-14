<?php
include("Connection.php");

$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];

$sql = "SELECT username from users where username = '" . $loginUser ."'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Username is already taken.";
}else{
    echo "Create User";
    $sql = "INSERT INTO users (username, password)
    VALUES ('" . $loginUser ."', '" . $loginPass ."')";
    if($conn->query($sql) === TRUE){
        $sql = "SELECT id 
                From users 
                WHERE username = $username";
        $conn->query($sql);
        $result = $conn->query($sql);
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
$conn->close();
?> 