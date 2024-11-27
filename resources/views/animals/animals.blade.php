@extends('layouts/header')

@section('title', 'Animais Perdidos')

@section('content')
<x-registre-ocorrencia />

<x-alert />

<div class="w-100 bg-light-subtle py-5 text-center text-muted fw-bold mb-4 d-flex justify-content-center align-items-center gap-3 flex-wrap">
    @forelse ($animals as $animal)
        <div class="card mb-3 shadow-lg mb-5 bg-body rounded d-flex flex-column" style="width: 24rem;">
            <img src="{{ asset('assets/images/animals/' . $animal->image) }}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $animal->name }}</h5>
                <p class="card-text">{{ $animal->description }}</p>
                <a href="#" class="btn btn-primary mt-auto">Entrar em contato</a>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Idade: {{ $animal->age }}</li>
                <li class="list-group-item">Raca: {{ $animal->breed }}</li>                <li class="list-group-item">Localização: {{ $animal->location }}</li>
                <li class="list-group-item">Contato: {{ $animal->contact }}</li>
                <li class="list-group-item">Status: @if ($animal->status == 1)
                    <span class="text-danger">Perdido</span>
                @else
                    <span class="text-success">Encontrado</span>
                @endif</li>
            </ul>
        </div>
    @empty
        <div class="alert alert-danger" role="alert">
            Nenhum animal encontrado.
        </div>
    @endforelse
</div>

@endsection
