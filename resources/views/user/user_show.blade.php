@extends('layouts/header')

@section('content')
    <h2>User - {{ $user->name }}</h2>

    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button">
    </form>
@endsection
