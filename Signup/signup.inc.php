<?php

$conn = mysqli_connect('localhost', 'Praxis', 'test','benutzer');

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

require "functions.inc.php";

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $benutzername = $_POST["benutzername"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    if(emptyInputSignup($name, $benutzername, $email, $pwd, $pwdrepeat) === true){
        header("location: signup.php?error=emptyinput");
        exit();
    }
    if (uidlength($benutzername) === true){
        header("location: signup.php?error=uidLength");
        exit();
    }
    if(invalidUid($benutzername) === true){
        header("location: signup.php?error=invalidUid");
        exit();
    }
    if(invalidEmail($email) === true){
        header("location: signup.php?error=invalidEmail");
        exit();
    }
    if (pwdlength($pwd) === true){
        header("Location: signup.php?error=passwordLength");
        exit();
    }
    if(pwdMatch($pwd, $pwdrepeat) === true){
        header("location: signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $benutzername) !== null){
        header("location: signup.php?error=usernametaken");
        exit();
    }
    if (emailExists($conn, $email) !== null){
        header("Location: signup.php?error=emailtaken");
        exit();
    }

    createUser($conn, $name, $email, $benutzername, $pwd);

    }
    else {
    header("location: signup.php");
    exit();
    }