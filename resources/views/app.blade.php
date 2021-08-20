<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

</head>
<body class="bg-gray-700">
<!-- ==================== Nav ====================  -->
<nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-gray-800 mb-3">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start">
            <a class="font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="/">
                LARAVEL TODOAPP
            </a>
        </div>
        <div class="lg:flex flex-grow items-center" id="example-navbar-warning">
            <ul class="flex flex-col lg:flex-row list-none ml-auto">
                <!-- ====================  After User Login ====================  -->
                @auth
                    <li class="nav-item">
                        <h1 class="px-3 py-2 flex items-center align-center font-semibold leading-snug text-white hover:opacity-75">
                        {{ $user->name}}
                        </h1>
                    </li>

                    <li class="nav-item">
                        <a onclick="document.getElementById('logout-form').submit()"
                           class="mr-2 px-3 py-2 flex items-center text-white uppercase font-semibold border transition-colors duration-150 border border-white rounded-lg focus:shadow-outline hover:bg-gray-300 hover:text-gray-600"
                           href="#">
                            Logout
                        </a>
                    </li>
                    <form action="{{ route('logout')}}" method="POST" id="logout-form">
                        @csrf
                    </form>
                @endauth
            <!-- ====================  End After User Login ====================  -->
                <!-- ====================  For Guests ====================  -->
                @guest
                    <li class="nav-item">
                        <a class="mr-2 px-3 py-2 flex items-center text-white uppercase font-semibold border transition-colors duration-150 border border-white rounded-lg focus:shadow-outline hover:bg-gray-300 hover:text-gray-600"
                           href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="mr-2 px-3 py-2 flex items-center text-white uppercase font-semibold border transition-colors duration-150 border border-white rounded-lg focus:shadow-outline hover:bg-gray-300 hover:text-gray-600"
                           href="{{ route('register') }}">
                            Register
                        </a>
                    </li>
            @endguest
            <!-- ==================== End For Guests ====================  -->
            </ul>
        </div>
    </div>
</nav>
<!-- ==================== End Nav ====================  -->
@yield('content')
</body>
</html>
