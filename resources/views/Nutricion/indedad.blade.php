@extends('HomeUsuario.indhomeusuario')
@section('FormNutricion')


<link rel="stylesheet" href="/style/ENutricion/estiloformnutricion.css">

<div class="allformu">

    <h1>PLAN NUTRICIONAL</h1>
    <h4>Segun tu edad</h4>

    <div class="contenedor">
    
    <div>
    <img src="img/imgNu/pastel.jpg" class="imagen1">
    
    <p>18-33</p>

    </div>

    <div>

    
    <img src="img/imgNu/dinosaurio.jpg" class="imagen2">
    

    <p>33-44</p>

    </div>

    <div>

        <a href="/formulario-meta"></a>
    <img src="img/imgNu/corazones.jpg" class="imagen3" >
    

    <p>44-55</p>

    </div>
    <div>


    <img src="img/imgNu/chica.jpg" class="imagen4">
    <p>+55</p>
    </div>
    </div>

    <div class="btn-sig">
        <a href="/formulario-meta">Siguiente</a>
    </div>
    

</div>

@endsection
