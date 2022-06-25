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
        <div class="text-4xl space-x-10">
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
            <li>
                <a href="{{ route('login.index')  }}">Ingresar</a>
            </li>
            <li>
                <a href="{{ route('register.index')  }}">Registrarse</a>
            </li>
            @endif
        </ul>
    </nav>

    @yield('content')

</body>

</html>