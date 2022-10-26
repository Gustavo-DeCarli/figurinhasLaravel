@extends('base.index')

@section('container')
<a class="btn btn-success mt-2 mb-2" href="/figurinhas/fcreate">Nova Figurinha</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Naturalidade</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($figurinhas as $figurinha)
            <tr>
                <td>{{$figurinha->nome}}</td>
                <td>{{$figurinha->dtnasc}}</td>
                <td>{{$figurinha->nt}}</td>
                <td>
                    <a class="btn btn-warning" href="/figurinhas/{{$figurinha->id}}/fedit">Editar</a>
                    <a class="btn btn-info" href="/figurinhas/{{$figurinha->id}}/fshow">Ver</a>
                    <a class="btn btn-danger" href="/figurinhas/{{$figurinha->id}}/fdestroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection