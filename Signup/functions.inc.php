<?php

function emptyInputSignup($name, $benutzername, $email, $pwd, $pwdrepeat){
    $result = false;
    if(empty($name) || empty($benutzername) || empty($email) || empty($pwd) || empty($pwdrepeat) ){
     $result = true;   
    }
    return $result;
}

function uidlength($benutzername){
    $result = false;
    if (strlen($benutzername)<4){
        $result = true;
    }
    return $result;
}

function invalidUid($benutzername){
   $result = false;
    if(!preg_match('/^[a-zA-Z0-9]*$/', $benutzername)){
     $result = true;   
    }
    return $result;
}

function invalidEmail($email){
   $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $result = true;   
    }
    return $result;
}

function pwdlength($pwd){
    $result = false;
    if (strlen($pwd)<8){
        $result = true;
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat) {
   $result = false;
    if($pwd !== $pwdrepeat){
     $result = true;   
    }
    return $result;
}

function uidExists($conn, $benutzername){
    $sql = "SELECT * FROM benutzer WHERE benutzername = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: signup.php?error=stmtfailed");
       exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $benutzername);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    return mysqli_fetch_assoc($resultData);
}

function emailExists($conn, $email) {
    $sql = "SELECT * FROM benutzer WHERE Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    return mysqli_fetch_assoc($resultData);
}

function  createUser($conn, $name, $email, $benutzername, $pwd) {
 $sql = "INSERT INTO benutzer (Name, benutzername, Email, passwort) VALUES (?, ?, ?,?);";
 $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: signup.php?error=stmtfailed");
       exit(); 
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $benutzername, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php");
}

function emptyInputLogin($benutzername, $pwd) {
   $result = false;
    if(empty($benutzername) || empty($pwd)) {
     $result = true;   
    }
    return $result;
}

function remember ($benutzername, $pwd){
    if (!empty($_POST["remember"])){
        setcookie("Lusername", $benutzername, time()+ (365*60*60*24));
        setcookie("Lpassword", $pwd, time()+ (365*60*60*24));
    } else {
        if(isset($_COOKIE["Lusername"])){
            setcookie("Lusername", "");
        }
        if(isset($_COOKIE["Lpassword"])){
            setcookie("Lpassword", "");
        }
    }
}

function loginUser ($conn, $benutzername, $pwd){
    $sql = "SELECT * FROM benutzer WHERE benutzername = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header( "location: login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $benutzername);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($resultData);
    if($row !== null && password_verify($pwd, $row['passwort'])){
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['benutzername'];
        header("location: ../index.php");
    } else {
        header("location: login.php?error=wronglogin");
    }
}