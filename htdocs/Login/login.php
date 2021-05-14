<html>
<head>
    <title> Gamingfacts - Login </title>
    <link rel="icon" type="image/png" href="../ProjektLogo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Navbar/Style.css"/>
    <link rel="stylesheet" type="text/css" href="../HeaderDesign.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="keywords" content="Login, Einloggen" />
    <meta name="description" content="Login der Website Gamingfacts"/>
<style>

</style>
</head>

<?php
    include_once "../header.html";
    include "NavbarLogin.html";
?>

    <h2> Login</h2>

    <form action="login.inc.php" method="post">
        <input type="text" name="benutzername" placeholder="Benutzername"><br>
        <input type="password" name="pwd" placeholder="Passwort"><br>
        <button type="submit" name="submit"> Einloggen </button>
    </form>
</html>

<?php
if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Füll alle Felder aus!</p>";  
  }
  else if ($_GET["error"] == "stmtfailed"){
      echo "<p> Ein Fehler ist aufgetreten. Versuche es bitte nochmal</p>";
  }
  else if ($_GET["error"] == "wronglogin"){
    echo "<p>Die Login- Angaben sind inkorrekt!</p>";
    }
  else if ($_GET["error"] == "successful"){
    echo "<p>Der Login war erfolgreich</p>";
    }
}
?>