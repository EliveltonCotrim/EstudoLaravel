<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>LaraDev: Crud Imobi</title>
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Lara<b>Dev</b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?= url('/imoveis') ?>" class="nav-link">Listar todos imóveis</a></li>
                <li class="nav-item"><a href="<?= url('/imoveis/novo') ?>" class="nav-link">Cadastrar novo imovel</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')


</body>

</html>
