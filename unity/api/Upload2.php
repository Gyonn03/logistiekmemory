<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_unity";

$db_var = $_POST["db_var"];
$timeremaining = $_POST["tijdover"];
$id = $_POST["id"];
$fouten = $_POST["fouten"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}


    $sql = "INSERT INTO tb_data (id, Tijd, Fouten, modus)
    VALUES ('" . $id ."', '" . $timeremaining ."', '" . $fouten ."', '" . $db_var ."')";
    $conn->query($sql);
$conn->close();
?> 