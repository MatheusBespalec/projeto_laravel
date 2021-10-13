@extends('layout.site')
@section('content')
    <h1>Pagina do meu Blog</h1>
    <a href="{{route('site.home')}}">Home</a>
    <a href="{{route('site.about')}}">Sobre</a>
    <a href="{{route('site.category')}}">Produtos</a>
    <a href="{{route('site.blog')}}">Blog</a>
    <a href="{{route('site.contact')}}">Contato</a>
@endsection
