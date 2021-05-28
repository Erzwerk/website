<head>
    <title> Gamingfacts - Registrierung </title>
    <link rel="icon" type="image/png" href="../ProjektLogo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Navbar/Style.css"/>
    <link rel="stylesheet" type="text/css" href="../HeaderDesign.css"/>
    <link rel="stylesheet" type="text/css" href="SignUpDesign.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="keywords" content="Signup, Registrierung" />
    <meta name="description" content="Registrierung der Website Gamingfacts"/>
</head>

<?php
    include "../header.html";
    include "NavbarSignup.html";
?>



<body>

        <div class="Af">
            <p> Registriere und logge dich ein, um exklusive Inhalte freizuschalten!</p>
        </div>

    <form class= "box" action="signup.inc.php" method="post">
        <h2> Registrierung</h2>
            <input type="text" name="name" placeholder="Vor- und Nachnahme"><br>
            <input type="text" name="benutzername" placeholder="Benutzername"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <input type="password" name="pwd" placeholder="Passwort (min. 8 Zeichen)"><br>
            <input type="password" name="pwdrepeat" placeholder="Passwort wiederholen"><br>
    <button class="button" type="submit" name="submit"> Absenden </button>
    </form>

</body>

<?php
if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Füll alle Felder aus!</p>";  
    }
    else if ($_GET["error"] == "uidLength"){
        echo "<p>Der Benutzername ist nicht lang genug!</p>";
    }
    else if ($_GET["error"] == "invalidUid"){
        echo "<p>Verwende einen gültigen Benutzernamen!</p>";
    }
    else if ($_GET["error"] == "invalidEmail"){
        echo "<p>Verwende ein gültiges Email- Format!</p>";
    }
    else if ($_GET["error"] == "passwordLength"){
        echo "<p>Das Password ist nicht lang genug!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch"){
        echo "<p>Die Passwörter sind nicht gleich!</p>";
    }
    else if ($_GET["error"] == "stmtfailed"){
        echo "<p>Irgendwas ist schief gelaufen. Versuche es bitte nochmal.</p>";
    }
    else if ($_GET["error"] == "usernametaken"){
        echo "<p>Der Benutzername wird bereits verwendet</p>";
    }
    else if ($_GET["error"] == "emailtaken"){
        echo "<p>Die Email-Adresse wird bereits verwendet</p>";
    }
}
?>