<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>


    <div class="container">
        <h1 class="w-full text-center"> Actiualizar User </h1>

    <form action="{{ Route('Login.Registro.Update')}} " method="POST">
    @csrf <!--obtener token -->
    <label for="usuario"> Usuario</label><br>
    <input class="border border-black px-1" type="text" id="usuario" name="usuario" value="{{ old('correo') }}" >
    <br>
        <label for="correo"> Correo</label><br>
    <input class="border border-black px-1" type="email" id="correo" name="correo" value="{{ old('correo') }}" >
    <br>


    <label for="contra"> Contrasena</label><br>
    <input class="border border-black px-1 " type="text" id="contra" name="contra" value="{{ old('contra') }}" >
    <br>


    <br>

    <button  class="border border-black px-1" type="submit"> Registrar</button>
    </form>


    </div>
</body>
</html>
