<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/Login.css">
        <title> MiNutriGym Form Login</title> 
    </head>

<body>

<div class="login-box">
    <img href="#" class="logito" src="img/Logo.png" alt="Fondo">
    <h1>Iniciar Sesión</h1>
    <form>
        <!-- Tipo de Usuario --> 
        <label for="Tipo Doc">Tipo de Usuario</label>
        <select name="Tipo de Doc" id="Tipo-doc">
            <option value="1">Cliente</option>
            <option value="2">Administrador</option>
            <option value="3">Nutricionista</option>
        </select>
        <!-- Tipo de Doc --> 
        <label for="Tipo Doc">Tipo de Documento</label>
        <select name="Tipo de Doc" id="Tipo-doc">
            <option value="1">Cédula de Ciudadania</option>
            <option value="2">Tarjeta de identidad</option>
            <option value="3">Cédula de Extranjería</option>
            <option value="4">Pasaporte</option>
        </select>

        <!-- Doc identidad --> 
        <label for="N.o Documento">Número de Identificación</label>
        <input type="text" Placeholder="Ingrese su ID">

        <!-- Contraseña --> 
        <label for="password">Contraseña</label>
        <input type="Contraseña" placeholder="Ingrese su Contraseña">

        <input type="submit" value="Log In">

        <a href="#">¿Olvidaste tu contraseña?</a>
        <br>
        <a href="/Register">¿Aun no te has registrado?</a>
    </form>
</div>

    

</body>
</html>