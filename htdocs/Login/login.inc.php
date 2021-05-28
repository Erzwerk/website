<?php
$conn = mysqli_connect('localhost', 'Praxis', 'test','benutzer');
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

require_once '../Signup/functions.inc.php';

if(isset($_POST["submit"])){
    $benutzername = $_POST["benutzername"];
    $pwd = $_POST["pwd"];

    if(emptyInputLogin($benutzername, $pwd) !== false){
        header("location: login.php?error=emptyinput");
        exit();
}
        remember($benutzername, $pwd);
    
        loginUser($conn, $benutzername, $pwd);

    } else {
    header("location: login.php?error=wronglogin");
    exit();
}
