@extends('layout.site')
@section('content')
    <section class="sobre py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h1 class="display-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                    <p><b>Mauris:</b>mollis a dui eget blandit. Pellentesque ac purus ullamcorper, malesuada neque. Etiam sed varius augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <p><b>Mauris:</b> luctus ante. Duis at malesuada neque. Etiam sed varius augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <p><b>Mauris:</b>mollis a dui eget blandit. Pellentesque ac purus ullamcorper, bibendum eros eget, luctus ante. Duis at malesuada neque. Etiam sed varius augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div><!--col-md-->
                <div class="col-lg">
                    <img src="{{asset('images/about.jpeg')}}" class="img-fluid" alt="Imagem responsiva">
                </div><!--col-md-->
            </div><!--row-->
        </div><!--container-->
    </section><!--sobre-->
@endsection

