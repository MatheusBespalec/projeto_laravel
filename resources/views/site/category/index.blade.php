@extends('layout.site')
@section('content')
<div class="jumbotron jumbotron-fluid py-4 bg-light">
    <div class="container">
        <h1 class="display-4">Categorias</h1>
        <p class="lead">Procure pela categoria de produtos que deseja.</p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        @foreach($categories as $category)
            <div class="col-md-3 my-3 justify-content-evenly">
                <div class="card p-3">
                    <img class="card-img-top" src="{{$category->image}}" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                        <a href="{{route('site.category.products',['category' => $category])}}" class="card-link btn btn-primary">Ver Produtos</a>
                    </div><!--card-body-->
                </div><!--card-->
            </div>
        @endforeach
    </div><!--row-->
</div><!--container-->


@endsection

