<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- <link href="resources/css/app.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href=""> --}}
    @livewireStyles()
</head>

<body>
    <div class="h-14 border-b border-gray-300 flex items-center">
        <p class="w-full text-center "> Mis pedidos</p>
    </div>

    @livewire('ver-detalle-pedido')

</body>
@livewireScripts()
</html>
