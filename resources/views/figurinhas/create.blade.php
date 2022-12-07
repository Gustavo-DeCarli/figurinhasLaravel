@extends('base.index')

@section('container')
<form action='/figurinhas/fstore' method='post' enctype="multipart/form-data">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    <div class="mb-2">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <div class="mb-2">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control" id="foto">
    </div>
    <div class="mb-2">
        <label for="dtnasc" class="form-label">Data de Nascimento</label>
        <input type="date" name="dtnasc" class="form-control" id="dtnasc">
    </div>
    <div class="mb-2">
        <label for="nt" class="form-label">Naturalidade</label>
        <input type="text" name="nt" class="form-control" id="nt">
    </div>
    <a class="btn btn-danger" href="/figurinhas">Voltar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection