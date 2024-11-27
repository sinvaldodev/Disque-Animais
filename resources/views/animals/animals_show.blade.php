@extends('layouts/header')

@section('content')
    <h2>Animal - {{ $animal->name }}</h2>

    <form action="{{ route('animals.destroy', ['animal' => $animal->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
@endsection
