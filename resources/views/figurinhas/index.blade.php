@extends('base.index')

@section('container')
<div>
    <nav>
        <ul class="nav__links mt-3">
            <a href="https://ifrs.edu.br "><img class="logo " src="{{asset('/img/ifrs.png')}}"></a>
            <li></li>

            <li><button id="novo" type="button" class="btn-new btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Comprar Pacote
                </button>
            </li>

            <li><button id="novo" type="button" class="btn-new btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Figurinhas Repetidas
                </button>
            </li>

            <li></li>

            <li>
                <form method="POST">
                    <button class="ml-5 " id="logout" name="logout" type="input" class="btn-logout btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Logout
                    </button>
            </li>

            <li></li>

            <li>
                <img class="logo" src="{{asset('/img/perfil.png')}}" width="150" weight="100">Moderador</a>
            </li>
            </li>
        </ul>
    </nav>
</div>

@foreach($figurinhas as $figurinha)
<div class="container ">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5 mt-5">
        <div class="card h-100">
            <img src="{{asset('/imagens')}}/{{$figurinha->foto}}" width="350" height="272" class="card-img-top mt-5">
            <div class="card-body bg-transparent mb-2">
                <h5 class="card-text text-center">Nome: {{$figurinha->nome}}</h5>
                <h5 class="card-text text-center">Data de Nascimento: {{$figurinha->dtnasc}}</h5>
                <h5 class="card-text text-center">Naturalidade: {{$figurinha->naturalidade}}</h5>
            </div>
        </div>
    </div>
</div>
@endforeach

<section class="bg-light py-4 my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3 text-primary">Figurinhas Do Infoderão</h2>
            </div>

            @foreach($figurinhas as $figurinha)
            <div class="col-md-4 col-lg-3">
                <div class="card my-2">

                    <img src="{{asset('/imagens')}}/{{$figurinha->foto}}" class="card-img-top"  width="300 " height="272" ">

                    <div class=" card-body">
                    <h3 class="card-title"><a href="#" class="text-secondary">Nome: {{$figurinha->nome}}</a></h3>
                    <p class="card-text">Data de Nascimento: {{$figurinha->dtnasc}} </p>
                    <p class="card-text">Naturalidade: {{$figurinha->naturalidade}} </p>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    </div>
</section>

@endsection