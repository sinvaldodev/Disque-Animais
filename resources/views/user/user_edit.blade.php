@extends('layouts.header')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Editar Usuário - {{ $user->name }}</h2>

    <!-- Formulário de Edição -->
    <div class="card shadow-lg">
        <div class="card-header">
            <h5 class="card-title">Atualizar Informações</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Campo de nome -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control" required>
                </div>

                <!-- Campo de email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" required>
                </div>

                <!-- Botão de atualizar -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
