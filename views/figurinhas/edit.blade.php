@extends('base.index')

@section('container')
<form class='mt-5' action='/figurinhas/fupdate' method='post'>
    <h5>Imagem</h5>
    <img src="{{asset('/imagens')}}/{{$figurinhas->foto}}" class="rounded mx-auto mt-3 card-image-top" alt="thumbnail" width="270" height="252">
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    <input type="hidden" value="{{ $figurinhas->ID }}" name="id" />
    <div class="mt-2 mb-2">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" value='{{ $figurinhas->nome }}' name="nome" class="form-control" id="nome">
    </div>
    <div class="mb-2">
        <label for="dtnasc" class="form-label">Data de Nascimento</label>
        <input type="date" value='{{ $figurinhas->dtnasc }}' name="dtnasc" class="form-control" id="dtnasc">
    </div>
    <div class="mb-2">
        <label for="nt" class="form-label">Naturalidade</label>
        <input type="text" value='{{ $figurinhas->naturalidade }}' name="naturalidade" class="form-control" id="naturalidade">
    </div>
    <a class="btn btn-danger" href="/figurinhas">Voltar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection