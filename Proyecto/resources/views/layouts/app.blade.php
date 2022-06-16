<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - laravel App</title>
</head>
<body>

    <nav>
        <div>
            <h1>
                TEXTO PAGINA aplicacion
            </h1>
        </div>
        <ul>
            @if(auth()->check())
                <li>
                    <p>BIENVENIDO <b>{{ auth()->user()->name }}</b></p>
                </li>
                <li>
                    <a href="{{ route('login.destroy')  }}">Cerrar sesion</a>
                    
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