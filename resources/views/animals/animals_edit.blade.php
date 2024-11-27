@extends('layouts/header')

@section('content')

    <h2>Edit Animals</h2>


    <form action="{{ route('users.update', $animals->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $animals->name }}">
        <input type="text" name="email" value="{{ $animals->email }}">
        <button type="submit">Update</button>
    </form>

@endsection
