<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/724bb47f14.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/EHomeUsuario/estilohomeusuario.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <title> MiNutriGym </title>
        
    </head>
    <header>
        <div class="logo">
         <a href="#"><img src="img/imgHoUs/Logo sin fondo.png" alt="" class="logo"></a>
        </div>
         <nav class="menu"> 
             <a href="/Inicio" class="nav-link">Inicio</a>
             <a href="/formulario-edad" class="nav-link">Nutrición</a>
             <a href="/Recetas" class="nav-link">Recetas</a>
             <a href="/Mi-Progreso" class="nav-link">Mi progreso</a>
         </nav>
         <div class="perfil">
             <nav>
                 <a href="/Perfil"><img src="img/imgHoUs/Perfil.png" alt=""></a>
             </nav>
         </div>
     </header>
<body>
    @yield('Inicio')
    @yield('FormNutricion')
    @yield('Recetas')
    @yield('Mi-Progreso')
    @yield('Perfil')
</body>
<footer class="footer">

    <div class="container">

        <div class="footer-row">
            <div class="footer-links">

                <h4>MiNutriGym</h4>
                <ul>
                    <li><a href="/Inicio#nosotros">Nosotros</a></li>
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