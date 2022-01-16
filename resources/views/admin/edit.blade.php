@extends('layouts.app')

@section('title', 'Edit Client ' . $user->name)

@section('content')

    <h1 class="text-5xl text-center pt-24">Edit Client {{ $user->name }}</h1>

    <div class="block mx-auto dark:bg-gray-900 dark:text-gray-500 my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
        <form action="{{ route('admin.update', $user) }}" method="POST">

            @csrf

            @method('PUT')

            <label>
                Name
                <br>
                <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" type="text" name="name" value="{{old('name', $user->name)}}">
            </label>

            @error('name')
            <br>
                <p class="border border-red-600 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
            <br>
            @enderror

            <br>
            <label>
                Email
                <br>
                <input class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" type="email" name="email" value="{{old('email', $user->email)}}">
            </label>

            @error('email')
            <br>
            <p class="border border-red-600 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
            <br>
            @enderror

            <br><br>
            <button class="font-bold py-2 px-4 rounded-md bg-gray-200 hover:bg-blue-600" type="submit">Update data</button>
            <a class="font-bold py-2 px-4 hover:text-blue-700 rounded-md bg-gray-200 hover:bg-red-600" href="{{ route('admin.index') }}">Back</a>

        </form>
    </div>



@endsection
