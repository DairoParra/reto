@extends('layouts.app')

@section('title', 'User ' . $user->id)

@section('content')

    <h1 class="text-5xl text-center pt-24">Show Client{{ $user->name }}</h1>

    <div class="block mx-auto dark:bg-gray-900 dark:text-gray-500 my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

        <a class="font-bold py-2 px-4 rounded-md bg-gray-200 hover:bg-blue-600" href="{{ route('admin.edit', $user) }}">Modify Client</a><br><br>


        <table class="text-center text-3xl border-2">
            <thead>
            <tr>
                <th class="border-2">Id</th>
                <th class="border-2">Name</th>
                <th class="border-2">Email</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-2">
                <td class="border-2">{{ $user->id }}</td>
                <td class="border-2">{{ $user->name }}</td>
                <td class="border-2">{{ $user->email }}</td>
            </tr>
            </tbody>
        </table>

        <br>
        <a class="font-bold py-2 px-4 rounded-md bg-gray-200 hover:bg-blue-600" href="{{ route('admin.index') }}">Back</a>

    </div>

@endsection
