<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBV</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cfe1e1aa1c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.plot.ly/plotly-2.11.1.min.js"></script>
</head>

<body>

    <nav class="bg-black text-white flex justify-between px-5 sm:px-14 py-5 items-center">
        <div class="text-3xl md:text-4xl space-x-3 md:space-x-10 flex flex-row">
            <a href="{{ url('/') }}" class="hover:text-sky-500 flex"><i class="fa-solid fa-house"></i></a>
            <a href="{{ url('/inventario') }}" class="hover:text-sky-500 hidden sm:flex"><i class="fa-solid fa-cart-flatbed-suitcase"></i></a>
            <a href="{{ url('/proveedor') }}" class="hover:text-sky-500 hidden sm:flex"><i class="fa-solid fa-truck"></i></a>
            <a href="{{ url('/API') }}" class="hover:text-sky-500 hidden sm:flex"><i class="fa-solid fa-database"></i></a>
            <a href="{{ url('/empleado') }}" class="hover:text-sky-500 hidden sm:flex"><i class="fa-solid fa-people-group"></i></a>
            <a href="{{ url('/produccion') }}" class="hover:text-sky-500 hidden sm:flex"><i class="fa-solid fa-person-arrow-up-from-line"></i></a>
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

                <a class="text-xs lg:text-lg" href="{{ route('login.index')  }}">
                    <button class="bg-blue-500 hover:bg-blue-800 py-2 px-7 font-bold rounded-xl">Ingresar </button>
                </a>

                <a class="text-xs lg:text-lg" href="{{ route('register.index')  }}">
                    <button class="bg-blue-500 hover:bg-blue-800 py-2 px-7 font-bold rounded-xl">Registrarse</button>
                </a>

                @endif
            </div>
        </ul>
    </nav>

    @yield('content')



    <section class="bg-black text-white grid grid-col-1 md:grid-cols-3 gap-y-7 text-center py-20">
      <div class="flex justify-center items-center">
        <a href="/"><h1 class="text-5xl font-black">PBV</h1></a>
      </div>

      <div class="font-light flex flex-col">
            <h1 class="font-bold">Colaboradores</h1>
            <br>
            <p>Danny Javier Vazques Cerón</p>
            <p>Juan Camilo Ballesteros Delgado</p>
            <p>Erik Palacio Castellanos</p>
      </div>

      <div class="pt-6">
        <h1 class="font-bold">Social Media</h1>
        <div class="flex justify-center gap-6 pt-4">
          <a href="#" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-facebook-f fa-lg"></i>
          </a>

          <a href="#" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-instagram fa-lg"></i>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-linkedin fa-lg"></i>
          </a>
        </div>
      </div>
      
    </section>

</body>

</html>