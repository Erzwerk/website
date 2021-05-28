<!DOCTYPE html>
<html lang="eng">

<head>
    <title> Gamingwebsite - Hardwarekombination </title>
    <link rel="stylesheet" type="text/css" href="../Navbar/Style.css"/>
    <link rel="stylesheet" type="text/css" href="StyleHK.css"/>
    <link rel="stylesheet" type="text/css" href="../HeaderDesign.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="icon" type="image/png" href="../ProjektLogo.png"/>
</head>

<?php
include "../header.html";
include "NavbarHK.php";
?>

<body>

<form>
    <div class="position2">
        <select name="my_html_select_box" id  ="HardwareCPU" class="select">
            <option value="I9_11900k">I9-11900k</option>
            <option value="Ryzen_7_5800x">Ryzen 7</option>
            <option value="Ryzen_9_5900x">Ryzen 9</option>
        </select>

        <select name="my_html_select_box_2" id  ="HardwareGPU" class="select">
            <option value="RX_6900XT">Radeon 6900XT</option>
            <option value="RTX_3080">Nvidia RTX 3080</option>
            <option value="RTX_3090">Nvidia RTX 3090</option>
        </select>
    </div>
</form>

<div class="position1">
    <button id ="Execute" type ="button" class="glow-on-hover">
        Benchmarks anzeigen
    </button>
</div>

<section id = "Bild"></section>

<div class="position1">
    <button id ="save" type ="button" class="glow-on-hover"> <i  class="fa fa-lock" ></i>
        Speichern
    </button>
</div>

<div class="position1">
    <button id ="test" type ="button" class="glow-on-hover">
        Gespeicherte Benchmarks anzeigen
    </button>
</div>


</body>
<script src = HardwarekombinationJS.js></script>
</html>
