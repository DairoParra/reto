@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1 class="text-5xl text-center pt-24">Administration panel</h1>

    <ul>
        @foreach($users as $user)
            <a href="{{ route('admin.show', $user->id) }}" class="hover:text-blue-700 text-blue-600 visited:text-purple-600">{{$user->name}}</a>
        @endforeach
    </ul>

    {{$users->links()}}

@endsection
