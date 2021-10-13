<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        <!-- Meta tags Obrigatórias -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>Projeto Laravel</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="{{route('site.home')}}">Logomarca</a>

            <div class="collapse navbar-collapse justify-content-end" id="textoNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link @if($page == 'home') active @endif" href="{{route('site.home')}}">Home <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($page == 'category') active @endif" href="{{route('site.category')}}">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($page == 'blog') active @endif" href="{{route('site.blog')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($page == 'about') active @endif" href="{{route('site.about')}}">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if($page == 'contact') active @endif" href="{{route('site.contact')}}">Contato</a>
                    </li>
                </ul>
            </div>
            </div><!--container-->
        </nav>

        @yield('content')

        <footer class="bg-light py-5">
            <div class="container">
                <div class="row">
                            <div class="col-sm">
                                <p class="font-weight-bold">Redes Sociais</p>
                                <ul class="pl-0">
                                    <li><a href="{{route('site.blog')}}">Blog</a></li>
                                    <li><a href="https://youtube.com" target="_blank">Youtube</a></li>
                                    <li><a href="https://fb.com" target="_blank">Facebook</a></li>
                                </ul>
                            </div><!--col-sm-->
                            <div class="col-sm">
                                <p class="font-weight-bold">Empresa</p>
                                <ul class="pl-0">
                                    <li><a href="{{route('site.category')}}">Nossos produtos</a></li>
                                    <li><a href="{{route('site.about')}}">Sobre nós</a></li>
                                    <li><a href="{{route('site.contact')}}">Entre em contato</a></li>
                                </ul>
                            </div><!--col-sm-->
                            <div class="col-sm">
                                <p class="font-weight-bold">Contatos</p>
                                <ul class="pl-0">
                                    <li>E-mail: example@example.com</li>
                                    <li>Telefone: (99) 9999-9999</li>
                                </ul>
                            </div><!--col-sm-->
                </div><!--row-->
            </div><!--container-->
        </footer>
        <footer class="text-muted bg-dark py-4 text-center">
                <p class="m-0">@Matheus BEspalec - Todos os Direitos Reservados</p>
        </footer>
        <!-- JavaScript-->
        <script src="https://kit.fontawesome.com/4053268ba0.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

