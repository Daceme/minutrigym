@extends('HomeUsuario.indhomeusuario')
@section('Recetas')

<script src="https://kit.fontawesome.com/724bb47f14.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style/verrecetas.css">

     <div class="container-navbar">

        <nav class= "navbar container">
            <i class="fa-solid fa-bars"></i>
            <ul class="categoría-recet">
                <li>
                    <a href="">Proteina</a>
                    <a href="">Carbohidrato</a>
                    <a href="">Grasas</a>
                    <a href="">Calorias Altas</a>
                    <a href="">Calorias Bajas</a>
                   
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
    
    <h1>Catálogo de recetas</h1>

    <section class="container recetas">
        <h1 class="heading-1">Recetas Principales</h1>

        <div class="contenedor-recetas">
            <div class="cartareceta">
                <div class="contenedorimg">
                    <img src="img/imgR/R1.png" alt="Imagen Ensalada Rusa con Pollo">
                    <div class="inf-ensalada">
                        <h3>Ensalada Rusa con pollo</h3>
                        <p>Ensalada compuesta por papa y 
                            verduras acompañada de pollo</p>
                         <div class="btn-ver-receta">Ver receta</div>
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
                         <div class="btn-ver-receta">Ver receta</div>
                    </div>
                </div>
            </div>
            <div class="cartareceta">
                <div class="contenedorimg">
                    <img src="img/EnsaladaRusaconPollo.png" alt="">
                    <div class="inf-ensalada">
                        <h3>Ensalada Rusa con pollo</h3>
                        <p>Ensalada compuesta por papa y 
                            verduras acompañada de pollo</p>
                         <div class="btn-ver-receta">Ver receta</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection