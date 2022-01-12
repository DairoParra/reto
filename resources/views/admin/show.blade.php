@extends('layouts.app')

@section('title', 'User ' . $user->id)

@section('content')

    <h1 class="text-5xl text-center pt-24">Show Client{{ $user->name }}</h1>

    <a href="{{ route('admin.edit', $user) }}">Modify Client</a>

    <table class="text-center text-5xl border-2">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr class="border-2">
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        </tbody>
    </table>

    <a class="text-3xl" href="{{ route('admin.index') }}">Back</a>

@endsection
