<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Controle de Estoque</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h"
        crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-primary bg-light">
            <a class="navbar-brand" href="">Estoque Laravel</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/produtos">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produtos/novo">Adicionar</a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('conteudo')

    </div>

</body>

</html>