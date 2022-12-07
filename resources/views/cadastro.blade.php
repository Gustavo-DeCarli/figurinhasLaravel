@extends('base.index')

@section('container')
<div class="text  container mt-5 ">
    <main>

        <div class=" container bg-light mb-2 position-absolute top-50 start-50 translate-middle rounded">
            <h1 class="mb-3">Crie seu Cadastro</h1>
            <form name="registration" action="{{ route('cadastro') }}" method="post">
                @csrf

                <div class="col-12 mt-4">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Adicione um e-mail válido.
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <label for="password" class="form-label">Crie uma senha:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********" onkeyup='check();' required>
                    <div class="invalid-feedback">
                        Por favor, crie sua senha.
                    </div>
                </div>

                <div class="mb-3 mt-2 mx-auto">
                    <a href="{{ route('login') }}" class="text-primary" target="_blank">Já possuo Cadastro</a>
                </div>

                <div class="col-4 mt-2 mb-2 ">
                    <button type="submit" class="btn-new btn-success" name="submit" value="Register">Criar meu Cadastro</button>
                </div>
        </div>
        </form>
</div>
</main>
</div>
@endsection