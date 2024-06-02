<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>

    <style>
        .activo a{
            color: red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <table class="table table-bordered">
            <tr>
                <th scope="col" class="{{setActivo('inicio')}}"><a href="/">Inicio</a></th>
                <th scope="col" class="{{setActivo('programas.index')}}"><a href="programas">Programas</a></th>
                <th scope="col" class="{{setActivo('talleres')}}"><a href="talleres">Talleres</a></th>
                <th scope="col" class="{{setActivo('asesoramiento')}}"><a href="asesoramiento">Asesoramiento</a></th>
                <th scope="col" class="{{setActivo('contacto')}}"><a href="contacto">Contacto</a></th>
            </tr>
        </table>
    </nav>
    @yield('content')
</body>
</html>