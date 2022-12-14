@extends('base.index')

@section('container')
<div>
    <nav>
        <ul class="nav__links mt-3">
            <a href="https://ifrs.edu.br "><img class="logo " src="{{asset('/img/ifrs.png')}}"></a>
            <li></li>

            <li>
                <form action='figurinhas/fcreate'>
                    <input id="novo" type="submit" value='Criar Figurinha' class="btn-new btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                </form>
            </li>

            <li></li>

            <li>
                <form method="GET" action="/logout">
                    <button class="ml-5 " id="logout" name="logout" type="input" class="btn-logout btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Logout
                    </button>
                </form>
            </li>

            <li></li>

            <li>
                <img disabled class="logo" src="{{asset('/img/perfil.png')}}" width="60" weight="10">{{$usuario}}</a>
            </li>
            </li>
        </ul>
    </nav>
</div>



<section class="bg-light py-4 my-5 rounded">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3 text-black text-center">Figurinhas Do Infoderão</h2>
            </div>
            @foreach($figurinhas as $figurinha)
            <div class="col-md-3 col-lg-3">
                <div class="card my-3">
                    <img src="{{asset('/imagens')}}/{{$figurinha->foto}}" class="rounded mx-auto mt-3 card-image-top" alt="thumbnail" width="270" height="252">
                    <div class=" card-body">
                        <input type='hidden' value='{{$figurinha->ID}}'>
                        <h3 class="card-title">Nome: {{$figurinha->nome}}</h3>
                        <p class="card-text">Data de Nascimento: {{$figurinha->dtnasc}} </p>
                        <p class="card-text">Naturalidade: {{$figurinha->naturalidade}} </p>
                        <div class="mx-auto btn-group">
                            <form method="GET" action="figurinhas/{{ $figurinha->ID }}/fedit">
                                <input class='btn rounded btn-warning' value='Editar' type='submit'>
                            </form>
                            <form method="GET" action="figurinhas/{{ $figurinha->ID }}/fdestroy">
                                <input class='rounded btn btn-danger' value='Excluir' type='submit'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

@endsection