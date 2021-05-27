<?php
if (isset($_POST["submit"])){

    $fName = $_POST["firstname"];
    $sName = $_POST["lastname"]
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordrepeat"];

require_once 'authenticate.php';
require_once 'functions.php';

if (emptyInputSignup($fName, $fName, $email, $password, $passwordRepeat) !== false){
    header("location: /register.html");
    exit();
}
if (invalidEmail($email) !== false){
    header("location: /register.html?error=invalidemial");
    exit();
}
if (passwordMatch($password, $passwordRepeat) !== false){
    header("location: /register.html?error=invalidpassword");
    exit();
}

createUser($conn, $email, $password);
}
else{
    header("location: /register.html");
    exit();
}