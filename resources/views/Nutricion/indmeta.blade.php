@extends('HomeUsuario.indhomeusuario')
@section('FormNutricion')

<link rel="stylesheet" href="/style/ENutricion/estiloformnutricion.css">

<div class="allformu">

    <h1>Elige tu meta</h1>
    <h4>Selecciona cual es tu objetivo </h4>

    <div class="contenedor">

    <div>

    <img src="img/imgNu/bajarpeso.webp" class="peso">
    <p>BAJAR PESO</p>

    </div>

    <div>

    <img src="img/imgNu/enforma.webp" class="forma">
    <p>SEGUIR EN FORMA</p>
    </div>

    <div>

    <img src="img/imgNu/musculo.webp" class="muscu">
    <p>TONIFICAR MUSCULOS</p>

    </div>
    </div>

    <div class="btn-sig">
        <a href="/formulario-tipo">Siguiente</a>
    </div>
    

</div>




@endsection