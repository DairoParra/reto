@extends('layouts.app')

@section('title', 'Edit Client ' . $user->name)

@section('content')

    <h1 class="text-5xl text-center pt-24">Edit Client {{ $user->name }}</h1>

    <form action="{{ route('admin.update', $user) }}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Name
            <br>
            <input type="text" name="name" value="{{$user->name}}">
        </label>

        @error('name')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Email
            <br>
            <br>
            <input type="email" name="email" value="{{$user->email}}">
        </label>

        @error('email')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit">Update data</button>
    </form>

    <a class="text-3xl" href="{{ route('admin.index') }}">Back</a>

@endsection
