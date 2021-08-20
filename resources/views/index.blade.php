@extends('app')
@section('content')
    <!-- ==================== Section ====================  -->
    @guest
        <section class="container px-4 mx-auto items-center ">
            <h1 class="text-center text-gray-300 font-bold py-5 text-6xl">Oppps.......</h1>
            <p class="border border-gray-500 text-center text-gray-300  py-5 text-2xl mb-3">
                First Login or Register To <strong>See</strong>, <strong>Create</strong>, <strong>Edit</strong> or
                <strong>Delete</strong> your todos.
            </p>
            <div class="flex items-center me-auto py-2">
                <a class="mr-2 px-3 py-2 flex items-center text-white uppercase font-semibold border transition-colors duration-150 border border-white rounded-lg focus:shadow-outline hover:bg-gray-300 hover:text-gray-600"
                   href="{{ route('login') }}">
                    Login
                </a>
                <a class="mr-2 px-3 py-2 flex items-center text-white uppercase font-semibold border transition-colors duration-150 border border-white rounded-lg focus:shadow-outline hover:bg-gray-300 hover:text-gray-600"
                   href="{{ route('register') }}">
                    Register
                </a>
            </div>
        </section>
    @endguest
    @auth
        <section class="container px-4 mx-auto items-center ">
            <h1 class="text-center text-gray-300 font-bold py-5 text-6xl">Your TODOs</h1>
            <!-- ==================== Tod Lists Form With Card ==================== -->
            <div class="flex items-center justify-center">
                <div class="max-w-full items-center w-full overflow-hidden rounded-lg shadow-lg bg-gray-900">
                    <div class="px-4 py-4">
                        <div class="block w-full overflow-x-auto">
                            <!-- ====================table  ====================-->
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                <tr class="border border-solid border-gray-500 border-l-0 border-r-0 ">
                                    <th class="px-6 bg-blueGray-50 text-gray-300 align-middle py-3 text-lg uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        ID
                                    </th>
                                    <th class="px-6 bg-blueGray-50 text-gray-300 align-middle py-3 text-lg uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Todo
                                    </th>
                                    <th class="px-6 bg-blueGray-50 text-gray-300 align-middle py-3 text-lg uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Action
                                    </th>
                                    <div class="flex mb-2 justify-center ">
                                        <a href="{{ route("todos.create") }}">
                                            <button
                                                class="h-10 px-5 m-2 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">
                                                Add New TODO
                                            </button>
                                        </a>
                                    </div>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($todos as $todo)
                                    <tr class="border-b border-gray-600 ">
                                        <th class="border-t-0 px-6 text-gray-300 align-middle border-l-0 border-r-0 text-base whitespace-nowrap p-4 text-left">
                                            {{ $todo->id }}
                                        </th>
                                        <td class="border-t-0 px-6 text-gray-300 align-middle border-l-0 border-r-0 text-base whitespace-nowrap p-4">
                                            {{ $todo->todo }}
                                        </td>
                                        <td class="flex flex-inline border-t-0 px-1 text-gray-300 align-middle border-l-0 border-r-0 text-base whitespace-nowrap py-2">
                                            <a href="">
                                                <button
                                                    class="h-10 px-5 m-2 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">
                                                    Done
                                                </button>
                                            </a>
                                            <a href="{{ route('todos.edit', $todo->id) }}">
                                                <button
                                                    class="h-10 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-700">
                                                    Edit
                                                </button>
                                            </a>
                                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button
                                                    type="submit"
                                                    onClick="return confirm('Are you sure')"
                                                    class="h-10 px-5 m-2 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Login Form With Card -->
        </section>
    @endauth
    <!-- ==================== End Section ====================  -->
@endsection
