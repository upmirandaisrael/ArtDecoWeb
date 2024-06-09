<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Limelight&display=swap">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/stylebio.css">

</head>
<body style="background-position:absolute; background-size:cover; background-image: url(../Images/fondoverd.png);">

<nav>
  <div class="menubar">
        <a href="../index.html">
        <img class=logo src='../Images/Vector.png'></a>
    <div class="icons">
      <div class="secondary-icons">
        <i class="icon-second"><img src="../Images/Search.png"></i>
      </div>
      <i class="icon-menu"><span></span></i>
    </div>
  </div>
  <ul class="menu">
    <li class="menu-link"><a href="galeria.html" class="text-item">Galería</a></li>
    <li class="menu-link"><a href="historia.html" class="text-item">Historia</a></li>
    <li class="menu-link sub">
        <a href="Artistas.html" class="text-item">Artistas<span class="icon"></span></a>
        <ul class="submenu">
          <li class="sub-item"><a href="tamara.html">Tamara de Lempicka</a></li>
          <li class="sub-item"><a href="paul.html">Paul Landowski</a></li>
          <li class="sub-item"><a href="Eugene.html">Eugene Robert Richee</a></li>
        </ul>
      </li>
    <li class="menu-link"><a href="contacto.html" class="text-item">Contacto</a></li>
  </ul>
</nav>

<section>
<?php
  include('../conexion.php');
  $buscar = $_POST['buscar'];
  echo "Su consulta: <em>".$buscar."</em><br>";
  $consulta = mysqli_query($conexion, "SELECT * FROM Artistas WHERE nombre LIKE '%$buscar%'");
?>
<article>
  <?php
    while($resultados=mysqli_fetch_array($consulta)) {
  ?>
  <div class="result-item">
    <p>
      <?php
        echo $resultados['bio'];
      ?>
    </p>
  </div>
  <hr/>
  <?php
    }
    mysqli_free_result($consulta);
    mysqli_close($conexion);
  ?>
</article>
</section>

</body>
</html>

