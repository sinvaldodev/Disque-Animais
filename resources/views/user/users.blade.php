@extends('layouts/header')

@section('content')
    <a href="{{ route('users.create') }}">Create</a>

    <hr>

    <h2>Users</h2>


    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} │ {{ $user->email }} │ <a href="{{ route('users.edit', $user->id) }}"> Edit </a> │ <a
                    href="{{ route('users.destroy', $user) }}"> Delete </a> │ <a
                    href="{{ route('users.show', ['user' => $user->id]) }}">Show</a></li>
        @endforeach
    </ul>
@endsection
