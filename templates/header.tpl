<!DOCTYPE html>
    <html lang="en">
    <head>
    <!-- PARA QUE NO SE ALMACENE EN CACHE EL CSS -->
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">


        <base href="{BASE_URL}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="{BASE_URL}/app/view/css/estilo.css">
    </head>
    <body>
        <header>
            <!-- Barra de Navegacion -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="peliculas">Pelis.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="peliculas">Peliculas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="generos">Generos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="admin/peliculas">Administrar peliculas</a>
                                <a class="dropdown-item" href="admin/generos">Administrar generos</a>
                                <a class="dropdown-item" href="admin/usuarios">Administrar usuarios</a>
                            </div>
                        </li>
                    </ul>
                    <a href="login"><button type="button" class="btn btn-primary">Login</button></a> 
                    <a href="logout"><button type="button" class="btn btn-danger">Logout</button></a> 
                </div>
            </nav>
        </header>