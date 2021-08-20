@extends('app')

@section('content')
    <!-- ==================== Section ====================  -->
    <section class="container px-4 mx-auto items-center ">
        <h1 class="text-center text-gray-300 font-bold py-5 text-6xl">Register</h1>
        <!-- Login Form With Card -->
        <div class="flex items-center justify-center">
            <div class="max-w-lg items-center w-full overflow-hidden rounded-lg shadow-lg bg-gray-900">
                <div class="px-4 py-4">

                    <form>
                        <!-- ======== Input field for Name ======== -->
                        <div class ="text-gray-300 mb-3">
                            <label class="block mb-1" for="name">Name</label>
                            <input
                                class="w-full h-10 px-3 text-gray-800 text-base placeholder-gray-500 border rounded-lg focus:shadow-outline"type="text"
                                name="name"
                                placeholder="Name"
                                id="name"/>
                        </div>
                        <!-- ======== Input field for Email ======== -->
                        <div class ="text-gray-300 mb-3">
                            <label class="block mb-1" for="email">Email</label>
                            <input
                                class="w-full h-10 px-3 text-gray-800 text-base placeholder-gray-500 border rounded-lg focus:shadow-outline"type="text"
                                name="email"
                                placeholder="Email"
                                id="email"/>
                        </div>
                        <!-- ======== Input field for Password ======== -->
                        <div class="text-gray-300">
                            <label class="block mb-1" for="password">Password</label>
                            <input
                                class="w-full h-10 px-3 text-base text-gray-800 placeholder-gray-500 border rounded-lg focus:shadow-outline"type="password"
                                placeholder="password"
                                id="password"/>
                        </div>
                        <!-- ======== Input field for Confirm Password ======== -->
                        <div class="text-gray-300 pt-2">
                            <label class="block mb-1" for="confirm-password">Confirm Password</label>
                            <input
                                class="w-full h-10 px-3 text-base text-gray-800 placeholder-gray-500 border rounded-lg focus:shadow-outline"type="password"
                                placeholder="Confirm Password"
                                id="confirm-password"/>
                        </div>
                        <br/>
                        <div class="flex items-center text-center text-gray-300 justify-center w-full">
                            <a href="#" class="w-full py-2 px-4 border rounded-lg hover:bg-gray-300 hover:text-gray-700 focus:shadow-outline">Register</a>
                        </div>
                    </form>
                    <p class="pt-2 text-gray-300">Have an account <a href="{{ route('login') }}" class="text-blue-600 underline">Login</a></p>
                </div>
            </div>
        </div>
        <!-- End Login Form With Card -->
    </section>
    <!-- ==================== End Section ====================  -->
@endsection
