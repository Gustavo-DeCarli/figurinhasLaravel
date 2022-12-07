@extends('base.index')

@section('container')

<body>

    <div class="container bg-light mb-2 position-absolute top-50 start-50 translate-middle rounded">
    <h1 class="mb-3">Login</h1>
        @if (session('erro'))
            <div>
                {{ session('erro') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">Email:</label>
                <input type="text" name="name" id="name" class="form-control"
                    placeholder="Entre com seu email" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Inválido.</div>
            </div>
            <div class="mb-3">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Entre com sua senha" required>
                <div class="valid-feedback">Válido.</div>
                <div class="invalid-feedback">Inválido.</div>
            </div>
            <div class="mb-3">
                <a href="{{ route('index') }}" class="text-primary" target="_blank">Não possuo cadastro</a>
            </div>

            <div class="mb-3">
                <button class="btn-new btn-success" name="submit" id="botao" type="submit" value="Login">Login</button>
            </div>

        </form>
    </div>
@endsection
