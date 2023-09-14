@extends('HomeUsuario.indhomeusuario')
@section('Recetas')

<script src="https://kit.fontawesome.com/724bb47f14.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style/verrecetas.css">
 <div class="full-container">

     <div class="container-navbar">

        <nav class= "navbar container">
            <i class="fa-solid fa-bars"></i>
            <ul class="categoría-recet">
                <li>
                    <a href="">Desayuno</a>
                    <a href="">Snack</a>
                    <a href="">Almuerzo</a>
                    <a href="">Postre</a>
                    <a href="">Cena</a>
                   
                </li>
            </ul>
            <form class="search-form">
                <input type="text" placeholder="Buscar">
                <div class="btn">
                <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </form>
         
        </nav>
        
     </div>

    <section class="container recetas">
        <br>
        <h1 class="heading-1">Recetas Principales</h1>

        <div class="contenedor-recetas">
            <div class="cartareceta">
                <div class="contenedorimg">
                    <img src="img/imgR/R1.png" alt="Imagen Ensalada Rusa con Pollo">
                    <div class="inf-ensalada">
                        <h3>Ensalada Rusa con pollo</h3>
                        <p>Ensalada compuesta por papa y 
                            verduras acompañada de pollo</p>
                         <a class="btn-ver-receta" href="Login">Ver receta</a>
                    </div>
                </div>
            </div>
            <div class="cartareceta">
                <div class="contenedorimg">
                    <img src="img/imgR/R2.png" alt="Imagen Batido de Banano">
                    <div class="inf-batido">
                        <h3>Batido de Banano</h3>
                        <p>Batido de plátano/banano con bastante 
                            proteína </p>
                         <a class="btn-ver-receta" href="">Ver receta</a>
                    </div>
                </div>
            </div>
            <div class="cartareceta">
                <div class="contenedorimg">
                    <img src="img/imgR/R3.png" alt="Imagen Ensalada con Pollo y Huevo">
                    <div class="inf-ensalada">
                        <h3>Ensalada con pollo y huevo</h3>
                        <p>Ensalada de lechuga, tomate, pollo y huevo nutritiva y balanceada</p>
                         <div class="btn-ver-receta">Ver receta</div>
                    </div>
                </div>
            </div>
            <div class="cartareceta">
                <div class="contenedorimg">
                    <img src="img/imgR/R4.png" alt="Imagen Rollitos de Espinaca">
                    <div class="inf-ensalada">
                        <h3>Rollitos de Espinaca</h3>
                        <p>Rollitos de espinaca rellenos de queso y jamón</p>
                         <div class="btn-ver-receta">Ver receta</div>
                    </div>
                </div>
            </div>
            <div class="cartareceta">
                <div class="contenedorimg">
                    <img src="img/imgR/R5.png" alt="Imagen Galletas de avena y plátano">
                    <div class="inf-ensalada">
                        <h3>Galletas de Avena y Plátano</h3>
                        <p>Excelente Snack hecho solo con avena y banano</p>
                         <div class="btn-ver-receta">Ver receta</div>
                    </div>
                </div>
            </div>
            <div class="cartareceta">
                <div class="contenedorimg">
                    <img src="img/imgR/R6.png" alt="Imagen Arroz con atún y verdura">
                    <div class="inf-ensalada">
                        <h3>Arroz fit con atún</h3>
                        <p>Un arroz con atún, verduras y maíz bastante completo</p>
                         <div class="btn-ver-receta">Ver receta</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </div>
@endsection