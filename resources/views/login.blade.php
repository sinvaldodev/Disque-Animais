@extends('layouts/header')

@section('content')

    <a href="{{ route('home.index') }}">Home</a>

    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Login</h2>


    @if (session()->has('success'))
        {{ session()->get('success') }}
    @endif

    @if (auth()->check())
        Already logged - {{ auth()->user()->name }} -
        <form action="{{ route('login.destroy') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>

    @else



    @error('error')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    @endif

@endsection
