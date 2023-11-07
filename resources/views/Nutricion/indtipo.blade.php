@extends('HomeUsuario.indhomeusuario')
@section('FormNutricion')

<link rel="stylesheet" type="text/css" href="/style/ENutricion/estiloformnutricion.css">

<div class="allformu">

    <h1>Elige tu tipo de cuerpo</h1>


    <div class="contenedor">

    <div>
    <img src="img/imgNu/rellenito.webp" class="relle">
    <p>Obeso</p>
    </div>

    <div>
    <img src="img/imgNu/extra.webp" class="extra">
    <p>Relleno</p>
    </div>

    <div>
    <img src="img/imgNu/regular.webp" class="regular">
    <p>Regular</p>
    </div>

    <div>
    <img src="img/imgNu/enforma.webp" class="normal">
    <p>En Forma</p>
    </div>

    </div>

    <div class="btn-sig">
        <a href="/formulario-datosnutri">Siguiente</a>
    </div>
    

</div>

@endsection