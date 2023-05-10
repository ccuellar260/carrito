<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
</head>
{{-- <livewire:styles /> --}}
@livewireStyles
<body>
    @if (auth()->user())
    <h1> Hola muno, {{ auth()->user()->name }} </h1>

    <form action="{{ route('Login.Logout') }}" method="post">
        @csrf
        <button type="submit"> cerrar seccoin</button>
    </form>
    @else
    <h3> Hola muno, no inicio seccion  </h3>
 <a href="{{ route('Login') }}"> iniciar seccion</a>
    @endif

    <br> <br>
 <a href="{{ route('Login.registro') }}"> registrar user</a>
    <br>   <br>   <br>
    <form action="{{ route('add') }}" method="POST">
        @csrf
        <button type="submit"> aniadir a carrito </button>
    </form>

    <br>

        @foreach ($carrito as $c)
        <ul>
            <li>{{ $c->id }} </li>
            <li>{{ $c->name }} </li>
            <li>{{ $c->price }}  </li>
        </ul>
        @endforeach

        <br><br>
        <p>livewire</p>
        @livewire('hola')

@livewireScripts
</body>
</html>
