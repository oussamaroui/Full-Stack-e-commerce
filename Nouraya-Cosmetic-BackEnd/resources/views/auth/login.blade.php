@extends('layouts.app')

@section('content')
    <div class="max-h-screen flex justify-center bg-gray-100 mt-20">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md h-[400px]">
            <h2 class="text-3xl font-bold text-center mb-6">{{ __('Login') }}</h2>
            <form action="{{ route('login') }}" method="POST" class="space-y-4 ">
                @csrf
                <div>
                    <label for="email" class="block text-gray-700 font-semibold">Addresse Email</label>
                    <input id="email" name="email" type="email" required autofocus autocomplete="email"
                        class="mt-1 block w-full h-11 bg-gray-100 rounded-md border-gray-300 shadow-sm focus:border-indigo-400 focus:ring focus:ring-indigo-400 focus:ring-opacity-50 px-2">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-semibold">Mot de passe</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                        class="mt-1 block w-full h-11 bg-gray-100 rounded-md border-gray-300 shadow-sm focus:border-indigo-400 focus:ring focus:ring-indigo-400 focus:ring-opacity-50 px-2">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember_me" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-gray-900">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm font-semibold text-[#E76364]">Forgot Password?</a>
                    @endif
                </div>
                <button type="submit"
                    class="w-full bg-[#E76364] text-white font-semibold py-2 rounded-md ">Login</button>
            </form>
        </div>
    </div>
@endsection
