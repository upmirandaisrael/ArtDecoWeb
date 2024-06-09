<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registrarse</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Limelight&display=swap">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/buscador.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      background-position: absolute;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url(Images/Fondo2.png);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }
    .content {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .hola {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .hola > div {
      width: 100%;
    }
    .holausu {
    width: 100%; 
    color: #FFD700;
    font-size: 100px;
    text-align: center;
    font-family: 'Limelight';
    animation: reveal 3ms ease-in-out forwards 100ms, glow 2000ms linear infinite;
}

.acceso{
    margin-top: -3%;
    font-size: 40px;
    text-align: center;
    font-family: 'belleza';
    font-style: italic;


}
.botonpanel {
    display: flex;
    justify-content:center;
}
.panel {
      font-size: 30px;
      text-align: center;
      background-color: #1D3B35;
      color: #FFD700 ; 
      padding: 10px 20px; 
      text-align: center; 
      text-decoration: none; 
      display: inline-block; 
      margin: 2px 2px; 
      cursor: pointer; 
      border-radius: 8px; 
      box-shadow: 2px 2px #FFD700;
      font-family: 'belleza';
    }

    .panel:hover {
      background-color: #2f6257;
    }
   
      

  </style>
</head>
<body>
  <div>
    <nav>
      <div class="menubar">
        <a href="index.html">
          <img class="logo" src='Images/Vector.png'>
        </a>
        <div class="icons">
          <div class="secondary-icons">
            <i class="icon-second"><img src="Images/Search.png" alt="Search Icon"></i>
          </div>
          <a href="registrarse.html">
          <i class="material-icons" style="font-size: 30px; margin-right: 30px;">person</i> 
        </a>
          <i class="icon-menu"><span></span></i>
        </div>
      </div>

      <ul class="menu">
        <li class="menu-link"><a href="Sub paginas/galeria.html" class="text-item">Galería</a></li>
        <li class="menu-link"><a href="Sub paginas/historia.html" class="text-item">Historia</a></li>
        <li class="menu-link sub">
          <a href="Sub paginas/Artistas.html" class="text-item">Artistas<span class="icon"></span></a>
          <ul class="submenu">
            <li class="sub-item"><a href="Sub paginas/tamara.html">Tamara de Lempicka</a></li>
            <li class="sub-item"><a href="Sub paginas/paul.html">Paul Landowski</a></li>
            <li class="sub-item"><a href="Sub paginas/Eugene.html">Eugene Robert Richee</a></li>
          </ul>
        </li>
        <li class="menu-link"><a href="Sub paginas/contacto.html" class="text-item">Contacto</a></li>
      </ul>
    </nav>

    <form id="search-form" class="search-form" action="Sub paginas/resultados_buscar.php" method="post">
      <input type="text" placeholder="Buscar..." name="buscar" required>
    </form>
  </div>

  <div class="content">
    <div class="hola">
      <div>
        <?php
        $usuario=$_POST['usuario'];
        $clave= md5 ($_POST['clave']);

        include("conexion.php");

        $consulta=mysqli_query($conexion, "SELECT nombre, apellido FROM usuarios WHERE usuario='$usuario' AND clave='$clave'");

        $resultado=mysqli_num_rows($consulta);

        if($resultado!=0){
          $respuesta=mysqli_fetch_array($consulta);
          
          $_SESSION['nombre']=$respuesta['nombre'];
          $_SESSION['apellido']=$respuesta['apellido'];
        
          echo "<div class='holausu'>Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."</div><br/>";
          echo "<div class='acceso'>Bienvenido/a al panel de usuarios.</div><br/>";
          echo "<div class='botonpanel'> <div class='panel'><a href='panel.php'> Ver Panel</div></div></a>"; 

        }else{
          echo "No es un usuario registrado";
          include ("registrarse.html");
        }
        ?>
      </div>
    </div>
  </div>

  <footer>
    <div id="copyright">
      <span class="f-bold">&copy; 2024</span>
      <span>Miranda Israel</span>
    </div>
  </footer>

  <script src="js/script.js"></script>
  <script src="js/buscadorscript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
