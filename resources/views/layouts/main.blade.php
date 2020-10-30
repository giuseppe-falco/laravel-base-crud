<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    <style>
        header{
          text-align: center;
          background-color: lightgrey;
        }


    </style>

    <header>
        <div>
            <a href="{{route("books.index")}}">Lista Libri</a>
            <a href="{{route("books.create")}}">Aggiungi libro</a>
        </div>
    </header>
    <main>
        @yield("mainContent")
    </main>
</body>
</html>