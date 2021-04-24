<h2> Login</h2>

<form action="login.inc.php" method="post">
        <input type="text" name="benutzername" placeholder="Benutzername"><br>
        <input type="password" name="pwd" placeholder="Passwort"><br>
        <button type="submit" name="submit"> Einloggen </button>
</form>

<?php
if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Füll alle Felder aus!</p>";  
  }
  else if ($_GET["error"] == "stmtfailed"){
      echo "<p> Ein Fehler ist aufgetreten. Versuche es bitte nochmal</p>";
  }
  else if ($_GET["error"] == "wronglogin"){
    echo "<p>Die Login- Angaben sind inkorrekt</p>";  
    }
  else if ($_GET["error"] == "successful"){
    echo "<p>Der Login war erfolgreich</p>";
    }
}
?>