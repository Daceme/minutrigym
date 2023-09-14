<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/homeusuario.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <title> MiNutriGym </title><
        
    </head>
    <header>
       <div class="logo">
        <a href="#"><img src="img/Logo sin fondo.png" alt="" class="logo"></a>
       </div>
        <nav class="menu"> 
            <a href="" class="nav-link">Inicio</a>
            <a href="" class="nav-link">Nutrición</a>
            <a href="Recetas" class="nav-linkR">Recetas</a>
            <a href="" class="nav-link">Mi progreso</a>
        </nav>
        <div class="perfil">
            <nav>
                <a href=""><img src="img/Perfil.png" alt=""></a>
            </nav>
        </div>
    </header>
<body>
@yield('Recetas')
</body>
<footer class="footer">

    <div class="container">

        <div class="footer-row">
            <div class="footer-links">

                <h4>MiNutriGym</h4>
                <ul>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Politica de privacidad</a></li>
                </ul>
            </div>
           
            <div class="footer-links">

                <h4>Redes</h4>
                <div class="social-link">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>

                </div>
            </div>
        </div>
    </div>
</footer>
</html>