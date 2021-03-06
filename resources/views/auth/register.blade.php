@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="block mx-auto dark:bg-gray-900 dark:text-gray-500 my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

        <h1 class="text-3xl text-center font-bold">Register</h1>

        <form action="" method="POST" class="mt-4">
            @csrf

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name" id="name" name="name" value="{{old('name')}}">
            @error('name')
            <p class="border border-red-600 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email" value="{{old('email')}}">
            @error('email')
            <p class="border border-red-600 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">
            @error('password')
            <p class="border border-red-600 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password confirmation" id="password_confirmation" name="password_confirmation">

            <button type="submit" class="rounded-mb bg-blue-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-600">Send</button>
        </form>
    </div>

@endsection
