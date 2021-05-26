<!DOCTYPE html>
<html>
<head>
<title> Gamingfacts - Hardwarebewertungen und Gamingguides </title>
    <link rel="icon" type="image/png" href="../ProjektLogo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Navbar/Style.css"/>
    <link rel="stylesheet" type="text/css" href="SDesign.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="keywords" content="Gaming, Hardware, Tutorials" />
    <meta charset="utf-8">
    <meta name="description" content=" Eine Website, welche Gamingnews und Hardwarekonfigurationen beinhaltet" />
</head>

        <?php
        include "../header.html";
        include "NavbarS.php";
        if(isset($_SESSION["id"])){
            echo "<p> Willkommen " . $_SESSION["benutzername"] . "</p>";
        } else{
            echo "<p> Registriere und logge dich ein, um exklusive Inhalte frei zu schalten</p>";
        }
        ?>

<body>

  <div class="column">
   <div id="corners1">
    <h2> Allgemeine Gamingnews </h2>
    <p>Neue Patch notes in League of Legends
    Patch Note 11.11, der Nerf von Master YI und Morgana wird dem
    Jungle auf längere Zeit guttun.
    <a href="https://oce.leagueoflegends.com/en-us/news/game-updates/patch-11-11-notes/">Link zur LoL- Webseite</a>
    Rust bekommt ein neues update
    <a href="https://www.youtube.com/watch?v=pYBjVu3KLFM/">Shadowfrax video</a>
    Die neuen Uboote? Und neues DLC in Rust
    Rust update 17.5
    </p>
  </div>
    </div>
  
  <div class="column">
    <div id="corners2">
    <h2> Hardwarenews </h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
      </div>
  
  <div class="column">
    <div id="corners3">
    <h2> News bezüglich Gamingguides </h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
</div>
    
</body>
</html>
