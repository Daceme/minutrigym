@extends('HomeUsuario.indhomeusuario')
@section('FormNutricion')

<link rel="stylesheet" type="text/css" href="/style/ENutricion/estiloformnutricion.css">

<div class="allformu">
    <div class="datosformu">
<h1>Formulario plan nutricional </h1>
<form>

        <label>NOMBRES</label>

          <input type="text" name="nombres" placeholder="ingrese sus nombre">

         <label for="nombre">APELLIDOS</label>
        
          <input type="text" name="apellido" placeholder="ingrese sus apellido">
        
          <label>ALTURA</label>

          <input type="text" name="altura(cm)" placeholder="ingrese su altura en cm">

          <label>PESO</label>

          <input type="text" name="peso" placeholder="ingrese su peso">
        
          <label>EDAD</label>

          <input type="text" name="edad" placeholder="ingrese su edad">
        
          <label>¿CUAL ES EL PESO DESEADO?</label>

          <input type="text" name="edad" placeholder="Ingrese su peso deseado">
          

         <label for="opcion"> ¿Que tanta actividad física consideras que tienes?</label>

            <select id="opcion-activtiempolibre">
            <option >Sedentario</option>
            <option >Camino lo suficiente</option>
            <option >Actividad física regular</option>
            <option >Actividad física constante</option>
            <option >Actividad física de alto rendimiento</option>
            <select>

           
         <label for="mi opcion"> ¿Cuánto sueles dormir?</label>

            <select id="Mi opcion">
            <option >Menos de 5 horas</option>
            <option > De 5 a 6 horas</option>
            <option >De 7 a 8 horas</option>
            <option >Mas de 8 horas</option>
            <select>
            

            <label for="mi opcion"> ¿Sigues alguna dieta?</label>

            <select id="Mi opcion">
            <option >Ninguna</option>
            <option >Soy intolerante a la lactosa</option>
            <option >No consumo alimentos con gruten</option>
            <option >Soy vegetariano</option>
            <option >Soy vegano</option>
            <select>


            <input class="registrar" type="submit" value="Registrar">

            </form>

        </div>

        <div class="btn-sig">
            <a href="/selec-nutricionista">Siguiente</a>
        </div>
        
</div>

@endsection