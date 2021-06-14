<?php
include("Connection.php");

$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];

$sql = "SELECT password 
        FROM tb_users 
        WHERE username = '" . $loginUser ."'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($row["password"] == $loginPass){
            echo "loginsucces";
            
        }else{
            echo "wrong Credentials";
        }
    }

}else{
    echo "username does not exist";
}
$conn->close();
?>