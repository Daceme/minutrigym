
    <link rel="stylesheet" href="/style/EInicio/estiloinicio.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

@extends('HomeUsuario.indhomeusuario')
@section('Inicio')

<body>
    <section class="home" id="home">
        <div class="home_container tk_container tk-grid">
            <div class="home_data"> 
                <img src="/img/imgHoUs/Logo sin fondo.png" class="logoimag" width="500">
                <h2 class="home_subtitle">Nutre tu cuerpo y cuida tu salud<br></h2>
                <a href="#menu" class="button">Ver Menu</a>
            </div>
        </div>
    </section>
    
    <section class="about section tk-container" id="nosotros">
        <div class="about_container tk-grid">
            <div class="about_data">
                <span class="section-subtitle about_initial">Nosotros</span>
                <h2 class="section-title about_initial">MiNutriGym<br></h2>
                <p class="about_description">Somos una web que te conecta de manera más fácil con tu nutricionista y te brindamos apoyo y seguimiento durante tu proceso de nutricion.</p>
                <a href="#" class="button">Explore</a>
            </div>
            <div class="about_data">
                <img src="/img/imgIn/peso.jpg" alt="" class="about_img">
            </div>
        </div>
    </section>
    
    
    <section class="menu section tk-container" id="menu">
        <span class="section-subtitle">Especial</span>
        <h2 class="section-title">Menu de la semana</h2>
        <div class="menu_container tk-grid">
    
            <div class="menu_content">
                <img src="/img/imgIn/plate4.png" class="menu_img" alt="">
                <h3 class="menu_name">Hamburguesa Casera</h3>
                <span class="menu_detail">Hay 278 calorías en Hamburguesa Casera (1 )</span>
                <span class="menu_preci"></span>
                <a href="#menu" class="button">Ver Menu</a>
            </div>
            <div class="menu_content">
                <img src="/img/imgIn/plate6.png" class="menu_img" alt="">
                <h3 class="menu_name">Verduras Salteadas</h3>
                <span class="menu_detail">Hay 125 calorías en Verduras Salteadas (1 taza).</span>
                <span class="menu_preci"></span>
                <a href="#menu" class="button">Ver Menu</a>
            </div>
            <div class="menu_content">
                <img src="/img/imgIn/plate5.png" class="menu_img" alt="">
                <h3 class="menu_name">Ramen</h3>
                <span class="menu_detail">Hay 453 calorías en Ramen (100 g).</span>
                <span class="menu_preci"></span>
                <a href="#menu" class="button">Ver Menu</a>
            </div>
            <div class="menu_content">
                <img src="/img/imgIn/plate1.png" class="menu_img" alt="">
                <h3 class="menu_name">Tocino</h3>
                <span class="menu_detail">Hay 27 calorías en Tocino (1 tajada delgada).</span>
                <span class="menu_preci"></span>
                <a href="#menu" class="button">Ver Menu</a>
            </div>
            <div class="menu_content">
                <img src="/img/imgIn/plate2.png" class="menu_img" alt="">
                <h3 class="menu_name">Carne de Cerdo</h3>
                <span class="menu_detail">Hay 363 calorías en Carne de Cerdo</span>
                <span class="menu_preci"></span>
                <a href="#menu" class="button">Ver Menu</a>
            </div>
            <div class="menu_content">
                <img src="/img/imgIn/plate3.png" class="menu_img" alt="">
                <h3 class="menu_name">Salchicha para Asar</h3>
                <span class="menu_detail">Hay 192 calorías en 100 g.</span>
                <span class="menu_preci"></span>
                <a href="#menu" class="button">Ver Menu</a>
            </div>
    
        </div>
    </section>
    
    <section class="services section tk-container" id="services">
        <span class="section-subtitle">Que ofrecemos</span>
        <h2 class="section-title"> Te ofrecemos nuestros apoyo con:</h2>
        <div class="services_container tk-grid">
            <div class="services_content">
                <img src="/img/imgIn/nutricionista.jpg" class="services_img" alt="">
                <h3 class="services_title">Plan Nutricional</h3>
                <p class="services_description">te ofrecemos un plan nutrecional basado en las recomendaciones del nutecionista.</p>
            </div>
            <div class="services_content">
                <img src="/img/imgIn/recetario.jpeg" class="services_img" alt="">
                <h3 class="services_title">Recetario</h3>
                <p class="services_description">Te ofrecemos un gran varidad de recetas que te pemitan crear difentes platos.</p>
            </div>
            <div class="services_content">
                <img src="/img/imgIn/progreso.jpg" class="services_img" alt="">
                <h3 class="services_title">Mi progreso</h3>
                <p class="services_description">Mostrara las calorias, grasas, carboidartos y proteinas que consumas a diario.</p>
            </div>
        </div>
    </section>
    
    
    <section class="contact section tk-container" id="contact">
        <div class="contact_container tk-grid">
            <div class="contact_data"> 
                <span class="section-subtitle contact_initial">Hablanos</span>
                <h2 class="section-title contact_initial">Contacto</h2>
                <p class="contact_description"></p>
            </div>
            <div class="contact_button">
                <a href="#" class="button">Contactanos</a>
            </div>
        </div>
    </section>
    
    </main>

 </body>


@endsection