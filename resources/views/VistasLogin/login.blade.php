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

<div class="isolate flex h-screen flex-col justify-center px-6 py-12 lg:px-8 bg-gray-100">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm"> <!-- sm:mx-auto sm:w-full sm:max-w-sm -->
      <img class="mx-auto h-32 w-auto" src="{{ asset('img/Productos/pollokiky.png') }}" alt="Pollo Kiki">
      <h2 class="mt-4 text-center text-2xl font-extrabold leading-9 tracking-tight text-gray-900">Pollos Kiki</h2>
    </div>

    <div class="mt-4 mx-auto w-8/12 sm:w-8/12 lg:w-3/12  px-8 pb-8 shadow bg-white rounded-lg ">
      <form class="space-y-6" action="{{ Route('Login.Store')}} " method="POST">
        @csrf <!--obtener token -->
        <div class="">
          <label for="correo" class="block text-sm font-medium leading-6 text-gray-900">Correo electronico</label>
          <div class="mt-2">
            <input id="correo" name="correo" type="email" autocomplete="email" required value="{{ old('correo','ccuellar7@gmail.com') }}"
            class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('correo')
        <p class="text-red-500"> Correo No Existe</p>
        @enderror
        </div>


        <div>
          <div class="flex items-center justify-between">
            <label for="contra" class="block text-sm font-medium leading-6 text-gray-900">Contrasena</label>
            <div class="text-sm">
              <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Olvidaste tu contrasena?</a>
            </div>
          </div>
          <div class="mt-2">
            <input id="contra" name="contra" type="password" autocomplete="current-password" required class="block w-full px-2
             rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2
             focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
            @error('contra')
                <p class="text-red-500"> Contrasena incorrecta</p>
            @enderror
        </div>


        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold
          leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
          focus-visible:outline-indigo-600">
          Login
        </button>
        </div>
      </form>

      <p class="mt-6 text-center text-sm text-gray-500">
        No tienes cuenta?
        <a href="{{route('Login.registro')}}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Registrate</a>
      </p>
    </div>
  </div>

</body>
</html>
