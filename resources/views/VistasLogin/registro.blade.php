<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="isolate bg-gray-100 px-6 pt-8 pb-4 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center ">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Registro de Usuario</h2>
    </div>
    <form action="{{ Route('Login.Registro.Store')}} " method="POST" class="mx-auto mt-8 max-w-xl">
        @csrf
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 bg-white sm:grid-cols-2 rounded-lg shadow p-10 pb-6 ">
        <div>
          <label for="nombre" class="block text-sm font-semibold leading-6 text-gray-900">Nombre</label>
          <div class="mt-2.5">
            <input type="text" name="nombre" value="{{ old('nombre') }}" required
            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="apellido" class="block text-sm font-semibold leading-6 text-gray-900">Apellido</label>
          <div class="mt-2.5">
            <input type="text" name="apellido" value="{{ old('apellido') }}" required
            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="">
          <label for="usuario" class="block text-sm font-semibold leading-6 text-gray-900">Nombre usuario</label>
          <div class="mt-2.5">
            <input type="text" name="usuario" value="{{ old('usuario') }}"  required
            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('user')
          <p class="text-red-500"> Este usuario ya existe</p>
          @enderror
        </div>
        <div class="">
            <label for="telefono" class="block text-sm font-semibold leading-6 text-gray-900">Telefono</label>
            <div class="relative mt-2.5">

              <input type="number" name="telefono" value="{{ old('telefono') }}" required
              class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="sm:col-span-2">
          <label for="correo" class="block text-sm font-semibold leading-6 text-gray-900">Correo electronico</label>
          <div class="mt-2.5">
            <input type="email" name="correo" value="{{ old('correo') }}" required
             class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('correo')
          <p class="text-red-500"> Este correo ya existe</p>
      @enderror
        </div>

        <div class="sm:col-span-2">
            <label for="contra" class="block text-sm font-semibold leading-6 text-gray-900">Contrasena</label>
            <div class="mt-2.5">
              <input type="password" name="contra" value="{{ old('contra') }}" required
              class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>


        <div class=" col-span-2">
            <button type="submit" class="block w-full rounded-md bg-purple-800 px-3.5 py-2.5 text-center text-sm
            font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2
            focus-visible:outline-offset-2 focus-visible:outline-indigo-600"> Registrar</button>
            <p class="mt-6 text-center text-sm text-gray-500">
                Ya tienes una cuenta?
                <a href="{{route('Login')}}" class="font-semibold leading-6 text-purple-800 hover:text-indigo-500">Inicia Sesion</a>
              </p>
        </div>


      </div>
    </form>
  </div>

</body>
</html>
