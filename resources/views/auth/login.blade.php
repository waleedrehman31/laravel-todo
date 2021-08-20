@extends('app')

@section('content')
    <!-- ==================== Section ====================  -->
    <section class="container px-4 mx-auto items-center ">
        <h1 class="text-center text-gray-300 font-bold py-5 text-6xl">{{ __('Login') }}</h1>
        <!-- Login Form With Card -->
        <div class="flex items-center justify-center">
            <div class="max-w-lg items-center w-full overflow-hidden rounded-lg shadow-lg bg-gray-900">
                <div class="px-4 py-4">
                    <!-- ======== Input field for Email ======== -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-gray-300 mb-3">
                            <label for="email" class="block mb-1">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email"
                                   class="w-full h-10 px-3 text-gray-800 text-base placeholder-gray-500 border rounded-lg focus:shadow-outline @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="text-gray-300 mb-3">
                            <label for="password"
                                   class="block mb-1">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                   class="w-full h-10 px-3 text-gray-800 text-base placeholder-gray-500 border rounded-lg focus:shadow-outline  @error('password') is-invalid @enderror"
                                   name="password"
                                   required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="text-gray-300 mb-3">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit"
                                        class="w-full py-2 px-4 border text-white rounded-lg hover:bg-gray-300 hover:text-gray-700 focus:shadow-outline">
                                    {{ __('Login') }}
                                </button>
                                <p class="pt-2 text-gray-300">Don't have account <a href="{{ route('register') }}"
                                                                                    class="text-blue-600 underline">{{ __('Register') }}</a>

                                </p>
                                @if (Route::has('password.request'))
                                    <p class="pt-2 text-gray-300">Don't remmember your password<a class="text-blue-600 underline" href="{{ route('password.request') }}">
                                        {{ __('Reset Password') }}
                                    </a></p>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Login Form With Card -->
    </section>
    <!-- ==================== End Section ====================  -->
@endsection
