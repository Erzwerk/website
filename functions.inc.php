<?php

function emptyInputSignup($name, $benutzername, $email, $pwd, $pwdrepeat): bool {
    $result = false;
    if(empty($name) || empty($benutzername) || empty($email) || empty($pwd) || empty($pwdrepeat) ){
     $result = true;   
    }
    return $result;
}

function invalidUid($benutzername): bool {
   $result = false;
    if(!preg_match('/^[a-zA-Z0-9]*$/', $benutzername)){
     $result = true;   
    }
    return $result;
}

function invalidEmail($email): bool {
   $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $result = true;   
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat): bool {
   $result = false;
    if($pwd !== $pwdrepeat){
     $result = true;   
    }
    return $result;
}

function uidExists($conn, $benutzername, $email) {
    $sql = "SELECT * FROM benutzer WHERE benutzername = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: signup.php?error=stmtfailed");
       exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $benutzername, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
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
    header("location: Startseite.html?error=none");
}

function emptyInputLogin($benutzername, $pwd): bool {
   $result = false;
    if(empty($benutzername) || empty($pwd)) {
     $result = true;   
    }
    return $result;
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
    if($row !== false && password_verify($pwd, $row['passwort'])){
        session_start();
        $_SESSION['id'] = $row['id'];
        header("location: Startseite.html?error=successful");
    } else {
        header("location: login.php?error=wronglogin");
    }

}

