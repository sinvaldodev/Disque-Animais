@extends('layouts/header')

@section('content')

    <h2>Edit</h2>


    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="text" name="email" value="{{ $user->email }}">
        <button type="submit">Update</button>
    </form>

@endsection
