<?php
    session_start();
?>

<nav>

  <ul class="menu">
    <li>  <a class="homer" href="Startseite.php"><i class="fa fa-fw fa-home"></i> STARTSEITE</a> </li>

    <li><a  href="#"><i class="fa fa-fw fa-television"></i> HARDWAREKOMBINATIONEN</a>
      <ul>
        <li><a align="center">FERTIGE KOMBINATIONEN</a>
        <li><a href="../Hardwarekombinationen/500-700.php">500$ - 700$</a>
        <li><a href="../Hardwarekombinationen/700-900.php">700$ - 900$</a>
        <li><a href="../Hardwarekombinationen/900-1100.php">900$ - 1100$</a>
        <li><a href="../Hardwarekombinationen/1100-1500.php">1100$ - 1500$</a>
        <li><a href="../Hardwarekombinationen/1500-2000.php">1500$ - 2000$</a>

              <?php
                    if(isset($_SESSION["id"])){
                        echo " <li><a href='../Hardwarekombinationen/Hardwarekominationen.php' align='center'>SELBER KONFIGURIEREN</a></li>";
                    }
              ?>

      </ul>
    </li>

              <?php
              if(isset($_SESSION["id"])){
                  echo "<li><a href='../Login/logout.inc.php'> <i class='fa fa-fw fa-user'></i> Logout </a>";
              } else {
                  echo "<li><a  href='../Login/login.php'> <i class='fa fa-fw fa-user'></i> LOGIN</a></li>";
                  echo "<li><a  href='../Signup/signup.php'> <i class='fa fa-fw fa-user'></i> REGISTRIERUNG</a></li>";
              }
              ?>

  </ul>
</nav>