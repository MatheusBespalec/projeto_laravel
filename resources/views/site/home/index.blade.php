@extends('layout.site')
@section('content')
    <main role="main">

        <section class="jumbotron text-center py-5 bg-light">
            <div class="container">
                <h1 class="jumbotron-heading">Lorem Ipsum</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam gravida velit sit amet arcu ultrices tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus sollicitudin elit nibh, eu ullamcorper mauris ullamcorper at. Etiam mauris leo, fermentum vitae efficitur eu, semper vel mauris.</p>
                <p>
                    <a href="{{route('site.category')}}" class="btn btn-primary my-2">Nossos produtos</a>
                    <a href="{{route('site.blog')}}" class="btn btn-secondary my-2">Nosso Blog</a>
                </p>
            </div>
        </section>

@endsection
