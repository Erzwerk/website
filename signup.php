<h2> Registrierung</h2>

<form action="signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Vor- und Nachnahme"><br>
        <input type="text" name="benutzername" placeholder="Benutzername"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="pwd" placeholder="Passwort"><br>
        <input type="password" name="pwdrepeat" placeholder="Passwort wiederholen"><br>
<button type="submit" name="submit"> Absenden </button>
</form>

<?php

if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Füll alle Felder aus!</p>";  
  }  

else if ($_GET["error"] == "invalidUid"){
    echo "<p>Verwende einen gültigen Benutzernamen!</p>";  
    }
    
else if ($_GET["error"] == "invalidEmail"){
    echo "<p>Verwende ein gültiges Email- Format!</p>"; 
}
else if ($_GET["error"] == "passwordsdontmatch"){
    echo "<p>Die Passwörter sind nicht gleich!</p>"; 
}
else if ($_GET["error"] == "stmtfailed"){
    echo "<p>Irgendwas ist schief gelaufen. Versuche es bitte nochmal.</p>"; 
}

else if ($_GET["error"] == "stmtfail"){
    echo "<p>Ich hab kein Bock mehr.</p>";      //Überarbeiten
}

else if ($_GET["error"] == "usernametaken"){
    echo "<p>Der Benutzername und/oder die Emailadresse werden
             bereits verwendet.</p>"; 
}
else if ($_GET["error"] == "none"){
    echo "<p>Du hast dich erfolgreich registriert.</p>"; 
}
}
?>