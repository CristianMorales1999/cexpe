<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>

    <style>
        th{
            background-color: rgb(1,0,140);
            text-align: center;
        }
        a{
            color: white;
        }
        .activo a{
            color: white;
            /*text-decoration: underline;*/
        }
        .activo{
            background-color: black;
        }
    </style>
</head>
<body>
    <nav>
        <table class="table">
            @include('partials.nav')
        </table>
    </nav>
</body>
</html>