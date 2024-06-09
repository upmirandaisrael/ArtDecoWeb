<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Panel</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Limelight&display=swap">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/style copy.css">
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
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .holaus {
		margin-top: 7%;
		margin-bottom: -4%;
        color: #FFD700;
        font-size: 60px;
        text-align: center;
        font-family: 'Limelight';
        animation: reveal 3ms ease-in-out forwards 100ms, glow 2000ms linear infinite;
    }
    .card {
        transform: scale(0.8);
        margin-top: -2%;
    }
    .panel  {
        font-size: 20px;
        background-color: #1D3B35;
        color: #FFD700;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: ;
        cursor: pointer;
        border-radius: 8px;
        font-family: 'belleza';
		margin-top: -4%;
		margin-bottom: 4%;
		opacity: 90%;

    }
    .panel:hover {
        background-color: #2f6257;
    }
	.nuevosart{
		margin-top: 4%; 
		font-style: italic;
	}

	.registrate{
		font-size: 20px;
        background-color: #1D3B35;
        color: #FFD700;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        border-radius: 8px;
        box-shadow: 2px 2px #FFD700;
        font-family: 'belleza';
		margin-top: 2%;
	}
	.registrate:hover {
	background-color: #2f6257;}
	
	.registrado-texto {
        font-size: 30px;
		font-family: 'belleza';
		font-style: italic;

    }

</style>
</head>
<body>
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
<div class="content">
    <?php
    if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
        ?>
        <p class="holaus">Panel de <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?></p>
        <p class=nuevosart> Nuevos Artistas </p> 
		
<div class="container">
	<div class="card">
		<figure class="card__thumb">
			<img src="Images/machado.png"  class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">Juarez Machado</h2>
				<p class="card__snippet">Es uno de los artistas actuales más importantes de Brasil (aunque vive en París). Machado nació en el estado de Santa Catalina al sur de Brasil. De niño entró en contacto con el arte a los 14 años, al trabajar en un taller de impresión de etiquetas de los medicamentos, envases y carteles a los laboratorios. En este proceso de creación, trabajó con pigmentos y se fue gestando un profesional. Poco después cursó estudios de Bellas Artes en los años 60, trasladándose a Río en 1966, donde empieza a labrarse una prometedora carrera.</p>
				<a href="Sub paginas/machado.html" class="card__button">Ver más</a>
			</figcaption>
		</figure>
	</div>

	<div class="card">
		<figure class="card__thumb">
			<img src="Images/Zinaida.png"  class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">Zinaida Serebriakova</h2>
				<p class="card__snippet">Fue quizás la pintora más importante de la Rusia pre-revolucionaria. Perteneció al movimiento «Mir Iskusstva», sobresaliendo claramente de los demás miembros del grupo. Son sus cuadros pequeñas obras maestras que rezuman armonía y plasticidad, y sus escenas de género son asombrosamente exquisitas: la vida rural de Rusia (el campo ruso con sus campesinos trabajando), escenas domésticas con sus hijos jugando o comiendo… Es la belleza de lo cotidiano.</p>
				<a href="Sub paginas/zinaida.html" class="card__button">Ver más</a>
			</figcaption>
		</figure>
	</div>

	<div class="card">
		<figure class="card__thumb">
			<img src="Images/josep.png" alt="Picture by Daniel Lincoln" class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">Josep de Togores</h2>
				<p class="card__snippet">Fue un pintor barcelonés ligado al Novecentismo y al art decó, aunque pasó por múltiples estilos hasta conseguir uno propio. Hijo de Josep de Togores i Muntades (cofundador del periódico El Mundo Deportivo) no se dedicó al deporte. A los 13 años Togores sufrió una grave meningitis que lo dejó sordo. ¿A qué puede dedicarse un sordo? Pues a la pintura, claro. </p>
				<a href="Sub paginas/josep.html" class="card__button">Ver más</a>
			</figcaption>
		</figure>
	</div>
</div>

        <div class="panel">
            <a href='salir.php'>Cerrar sesión</a>
        </div>
		
        <?php 
    } else {
        echo "<span class='registrado-texto'>Solo para usuarios registrados...</span>";
        echo "<a class='registrate' href='registrarse.html'>Regístrate o Iniciá Sesión</a>";
    }
    ?>
</div>
<form id="search-form" class="search-form" action="Sub paginas/resultados_buscar.php" method="post">
    <input type="text" placeholder="Buscar..." name="buscar" required>
</form>
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
