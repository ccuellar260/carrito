<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}">
</head>
<body>
    <p> Aqui se mostrara el detalle del pedido </p>
    {{-- mostrar algo de la orden del pedido  --}}

    <!--
        pendiente 1
        recibio 2
        enviado 3
        entregado 4
        anualdo 5

    -->

    @php
        $status = 2;
    @endphp

    <div class="w-full h-44 mt-7 flex justify-center bg-gray-300">
        <div class="w-8/12  rounded-3xl text-white flex items-center ">
            {{-- didsenio de estado de la order --}}
            <div class="bg-white rounded-lg shadow px-12 py-8 mb-6 w-full flex items-center">
                <div class="relative">
                    <div class=" {{ ($status >= 2 && $status != 5 )?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12 flex items-center justify-center">
                        <i class="fas fa-check text-white"> </i>
                    </div>

                    <div class="absolute text-black -left-1.5 mt-0.5">
                        <p class="text-black">Recibido</p>
                    </div>

                </div>

                <div class="{{ ($status >= 3 && $status != 5 )?'bg-blue-400':'bg-gray-400' }} h-1 flex-1 mx-2">
                </div>

                <div class="relative">
                    <div class=" {{ ($status >= 3 && $status != 5 )?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-truck text-white"> </i>

                    </div>
                    <div class="absolute text-black -left-1 mt-0.5">
                        <p class="text-black">Enviado</p>
                    </div>
                </div>

                <div class="{{ ($status >= 4 && $status != 5 )?'bg-blue-400':'bg-gray-400' }} h-1 flex-1  mx-2">
                </div>

                <div class="relative">
                    <div class="{{ ($status >= 4 && $status != 5 )?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"> </i>
                    </div>
                    <div class="absolute text-black -left-2 mt-0.5">
                        <p class="text-black">Entregado</p>
                    </div>
                </div>
            </div> <!-- fin del disenio-->



        </div>


    </div>
</body>
</html>
