<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cfe1e1aa1c.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="bg-black text-white flex justify-between px-14 py-5 items-center">
        <div class="text-xs lg:text-4xl space-x-3 lg:space-x-10">
            <a href="{{ url('admin') }}" class="hover:text-sky-500"><i class="fa-solid fa-house"></i></a>
            <a href="{{ url('admin') }}" class="hover:text-sky-500"><i class="fa-solid fa-chart-pie"></i></a>
            <a href="{{ url('admin') }}" class="hover:text-sky-500"><i class="fa-solid fa-cart-flatbed-suitcase"></i></a>
            <a href="{{ url('admin') }}" class="hover:text-sky-500"><i class="fa-solid fa-circle-dollar-to-slot"></i></a>
        </div>

        <ul>

            @if(auth()->check())

            <li>
                <p>BIENVENIDO <b>{{ auth()->user()->name }}</b></p>
            </li>
            <li>
                <a href="{{ route('login.destroy')  }}" class="text-red-400">Cerrar sesion</a>

            </li>
            @else

            <div class="flex justify-end gap-2 lg:gap-10 lg:h-auto">
                <button class="bg-blue-500 hover:bg-blue-800 py-2 px-7 font-bold rounded-xl">
                    <a class="text-xs lg:text-lg" href="{{ route('login.index')  }}">Ingresar</a>
                </button>


                <button class="bg-blue-500 hover:bg-blue-800 py-2 px-7 font-bold rounded-xl">
                    <a class="text-xs lg:text-lg" href="{{ route('register.index')  }}">Registrarse</a>
                </button>
                @endif
            </div>
        </ul>
    </nav>

    @yield('content')

    <section>
        <footer class="bg-black text-white text-xl flex flex-wrap justify-around text-center py-14">
            <div>ERP</div>

            <div>
                <p>Info</p>
            </div>

            <div>
                <p>Contacto</p>
            </div>

        </footer>
    </section>

</body>

</html>