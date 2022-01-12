@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1 class="text-5xl text-center pt-24">Administration panel</h1>

    <div class="block mx-auto dark:bg-gray-900 dark:text-gray-500 my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

        <ul>
            @foreach($users as $user)
                <li><a href="{{ route('admin.show', $user->id) }}" class="hover:text-blue-700 text-blue-600 visited:text-purple-600">{{$user->name}}</a></li>
                <br>
            @endforeach
        </ul>

        {{$users->links()}}

    </div>

@endsection
