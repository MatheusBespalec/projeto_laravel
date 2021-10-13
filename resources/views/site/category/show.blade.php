@extends('layout.site')
@section('content')
<div class="row">
    <div class="card col-md-3 my-3 p-0 w-100">
        <img class="card-img-top" src="{{ asset($category->image) }}" alt="Imagem de capa do card">
        <div class="card-body">
            <h5 class="card-title">{{$category->name}}</h5>
        </div><!--card-body-->
    </div><!--card-->

    <div class="col-md-8 row justify-content-around mt-3">
            @foreach($category->products as $product)
            <div class="card col-md-5 mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div><!--col-md-8-->
</div><!--row-->
@endsection
