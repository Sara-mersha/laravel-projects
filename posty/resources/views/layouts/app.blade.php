<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posty</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">dashbord</a>
            </li>
            <li>
                <a href="" class="p-3">Post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">user</a>
            </li>
            <li>
                <a href="" class="p-3">login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            <li>
                <a href="" class="p-3">Logout</a>
            </li>

        </ul>
    </nav>

    @yield('content')
</body>
</html>