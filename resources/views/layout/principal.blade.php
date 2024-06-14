<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    @vite(['./resources/sass/app.scss'])--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Controle de estoque</title>
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            display: none;
        }
        body {
            padding-top: 76px; /* Altura da navbar + espaçamento */
            padding-bottom: 56px; /* Altura do footer + espaçamento */
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
<div class="container pb-2">
    <nav class="container navbar bg-primary py-3 navbar-expand-lg rounded-1 fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="/produto">
                Estoque Laravel
            </a>
           <ul class="nav navbar-nav navbar-light">
               <li><a href="{{action([App\Http\Controllers\ProdutoControler::class, 'novo'])}}" class="navbar-brand">Novo</a></li>
               <li><a href="{{action([App\Http\Controllers\ProdutoControler::class, 'lista'])}}" class="navbar-brand">Listagem</a></li>
           </ul>
        </div>
    </nav>
</div>
<main class="flex-fill container my-4">
    @yield('conteudo')
</main>

<footer class="container navbar bg-primary py-2 mt-auto rounded-1 fixed-bottom" data-bs-theme="dark">
    <div class="container-fluid">
        <span class="text-light text-center mb-0">© Livro de Laravel da casa do Código</span>
    </div>
</footer>
</body>
</html>
