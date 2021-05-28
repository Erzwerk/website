<!DOCTYPE html>
<html>
<head>
<title> Gamingfacts - Hardwarebewertungen und Gamingguides </title>
    <link rel="icon" type="image/png" href="../ProjektLogo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Navbar/Style.css"/>
    <link rel="stylesheet" type="text/css" href="Startseite/SDesign.css"/>
    <link rel="stylesheet" type="text/css" href="HeaderDesign.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="keywords" content="Gaming, Hardware, Tutorials" />
    <meta charset="utf-8">
    <meta name="description" content=" Eine Website, welche Gamingnews und Hardwarekonfigurationen beinhaltet" />
</head>

        <?php
        include "header.html";
        include "NavbarS.php";
        ?>

<body>
 
        <?php
            if (isset($_SESSION["id"])){
                include "Startseite/WN.php";
            }
        ?>
  
  <div class="column">
   <div id="corners1">
    <h2> Allgemeine Gamingnews </h2>
    <p>Neue Patch notes in League of Legends<br>
Patch Note 11.11, der Nerf von Master YI und <br>
Morgana wird dem Jungle auf längere Zeit guttun. <br>
<a href="https://oce.leagueoflegends.com/en-us/news/game-updates/patch-11-11-notes/">Link zur LoL- Webseite</a> <br>
Rust bekommt ein neues update<br>
<a href="https://www.youtube.com/watch?v=pYBjVu3KLFM/">Shadowfrax video</a><br>
Die neuen Uboote? Und neues DLC in Rust<br>
Rust update 17.5 <br>
    </p>
  </div>
    </div>
  
  <div class="column">
    <div id="corners2">
    <h2> Hardwarenews </h2>
    <p>Neue RTX reihe ist immer noch ausverkauft <br>
und schwer zu bekommen, die Preise liegen immer noch mehr als 100 € über dem Retailpreis. <br>
Intels neues Lineup ist vielleicht wieder kompetitiv <br>
mit AMDs CPUs<br>
<a href="https://www.youtube.com/watch?v=tjUxrEGCk18/">Video von Kreativecke</a> <br>
Momentan ist Intel besser im geringem Preissegment. <br>
</p>
  </div>
      </div>
  
  <div class="column">
    <div id="corners3">
    <h2> News bezüglich Gamingguides </h2>
    <p>League of Legends Streamer Tyler1 hat wieder mal sein Tisch zerschlagen. <br>
Twitch bannt Badestreams vor allem Weibliche sind davon betroffen. <br>
Twitch verliert im Gericht gegen Phantomlord, <br>
wegen unzulässigen Bannes und muss mehrere tausend <br>
Euro deshalb bezahlen<br>
</p>
  </div>
</div>
    
</body>
</html>
