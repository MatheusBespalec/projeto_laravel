@extends('layout.site')
@section('content')
    <section class="contato py-5">
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="col align-self-center" style="max-width: 500px;">
                    <h1>Lorem ipsim silor?</h1>
                    <p>Quisque posuere ornare massa, nec blandit felis ultricies at. Nullam et libero porttitor, laoreet risus eu, ultricies nulla.</p>
                </div><!--col-sm-->
            </div><!--row-->

            <div class="group-contato row">
                <form class="col-md p-3 m-3" method="post" action="{{route('site.contact.form')}}">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    @endif
                    <div class="form-group">
                        <label for="name">Nome</label>
                        @error('name')
                            <div id="emailHelp" class="alert alert-danger form-text text-muted ">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control @error('name') error @enderror" id="name" name="name" placeholder="Ex: José da silva" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Endereço de email</label>
                        @error('email')
                            <div id="emailHelp" class="alert alert-danger form-text text-muted">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control @error('email') error @enderror" id="email" name="email" aria-describedby="emailHelp" value="{{old('email')}}" placeholder="Ex: email@email.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        @error('message')
                            <div id="emailHelp" class="alert alert-danger form-text text-muted">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control @error('message') error @enderror" id="message" name="message" placeholder="Digite aqui...">{{old('message')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form><!--col-md-->
                <div class="col-md p-3 m-3">
                    <p class="mb-0"><strong><i class="fas fa-phone-alt"></i> Contato por Telefone:</strong></p>
                    <p>(99) 9999-9999</p>

                    <p class="mb-0"><strong><i class="fas fa-envelope"></i> Contato por E-mail:</strong></p>
                    <p>contato@dominio.com</p>

                    <p class="mb-0"><strong><i class="fas fa-map-marker-alt"></i> Endereço:</strong></p>
                    <p class="mb-0">Lorem Ipsum, 254, Center</p>
                    <p class="mb-0">Dolor Amer - LI</p>
                    <p>00000-000</p>

                    <a href="https://fb.com" target="_blank">Facebook</a> / <a href="https://youtube.com" target="_blank">Youtube</a>
                </div><!--col-md-->
            </div>

        </div><!--container-->
    </section><!--contato-->
@endsection
