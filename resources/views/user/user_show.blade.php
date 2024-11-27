@extends('layouts.header')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Usuário - {{ $user->name }}</h2>

    <!-- Informações do usuário -->
    <div class="card mb-3 shadow-lg">
        <div class="card-header">
            <h5 class="card-title">Detalhes do Usuário</h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nome:</strong> {{ $user->name }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                <!-- Adicione outros campos conforme necessário -->
            </ul>
        </div>
    </div>

    <!-- Botões para editar e excluir -->
    <div class="d-flex justify-content-between mt-4">
        <!-- Botão de editar -->
        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-warning">
            Editar
        </a>

        <!-- Formulário de exclusão -->
        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" class="ms-2">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                Excluir
            </button>
        </form>
    </div>
</div>
@endsection
