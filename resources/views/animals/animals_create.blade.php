@extends('layouts/header')

@section('content')
    <div class="container my-5 d-flex justify-content-center align-items-center w-100">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 700px;">
            <h2 class="text-center mb-4">Cadastrar Animal</h2>

            {{-- Formulário de criação de usuário --}}
            <form action="{{ route('animals.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="image" class="form-label">Imagem do Animal</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Digite o nome do animal" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" name="type" id="type" class="form-control"
                            placeholder="Ex.: Gato, Cachorro" required>
                    </div>

                    <div class="col-md-6">
                        <label for="breed" class="form-label">Raça</label>
                        <input type="text" name="breed" id="breed" class="form-control"
                            placeholder="Digite a raça do animal" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="age" class="form-label">Idade</label>
                        <input type="number" name="age" id="age" class="form-control" placeholder="Idade em anos"
                            required>
                    </div>

                    <div class="col-md-6">
                        <label for="location" class="form-label">Localização</label>
                        <input type="text" name="location" id="location" class="form-control"
                            placeholder="Digite a localização" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="contact" class="form-label">Contato</label>
                        <input type="text" name="contact" id="contact" class="form-control"
                            placeholder="Telefone ou e-mail para contato" required>
                    </div>

                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="1">Perdido</option>
                            <option value="0">Encontrado</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Descrição breve do animal"
                            rows="3" required></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Cadastrar Animal</button>
                </div>
            </form>

        </div>
    </div>
@endsection
