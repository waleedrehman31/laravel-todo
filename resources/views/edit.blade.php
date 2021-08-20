@extends('app')
@section('content')
    <!-- ==================== Section ====================  -->
    <section class="container px-4 mx-auto items-center ">
        <h1 class="text-center text-gray-300 font-bold py-5 text-6xl">Edit Todo</h1>
        <!-- Login Form With Card -->
        <div class="flex items-center justify-center">
            <div class="max-w-lg items-center w-full overflow-hidden rounded-lg shadow-lg bg-gray-900">
                <div class="px-4 py-4">

                    <form   action="{{ route('todos.update', $todo->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                            @csrf
                        <!-- ======== Input field for Name ======== -->
                        <div class ="text-gray-300 mb-3">
                            <label class="block mb-1" for="todo">Todo</label>
                            <input
                                class="w-full h-10 px-3 text-gray-800 text-base placeholder-gray-500 border rounded-lg focus:shadow-outline"
                                type="text"
                                name="todo"
                                value="{{$todo->todo}}"
                                id="todo"/>
                        </div>
                        <div class="flex items-center text-center text-gray-300 justify-center w-full">
                            <button type="submit" class="w-full py-2 px-4 border rounded-lg hover:bg-gray-300 hover:text-gray-700 focus:shadow-outline">Update</button>
                        </div>
                    </form>
                    <p class="pt-2 text-gray-300">Create new <a href="{{ route('todos.index') }}" class="text-blue-600 underline">TODO</a></p>
                </div>
            </div>
        </div>
        <!-- End Login Form With Card -->
    </section>
    <!-- ==================== End Section ====================  -->
@endsection
