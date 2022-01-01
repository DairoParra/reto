<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-800">
<!-- Document body -->

    <nav class="flex py-5 bg-blue-600 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2x1 font-bold">My Application</p>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li class="mx-6">
                <a href="{{ route('login.index') }}" class="font-semibold hover:bg-blue-700 py-3 px-4 rounded-md">Log In</a>
            </li>
            <li>
                <a href="{{ route('register.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-blue-700">Register</a>
            </li>
        </ul>
    </nav>

    @yield('content')

</body>
</html>
