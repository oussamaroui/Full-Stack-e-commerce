@extends('layouts.app')

@section('content')
    <div class="max-h-screen flex justify-center bg-gray-100 mt-20">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md h-[500px]">
            <h2 class="text-3xl font-bold text-center mb-6">{{ __('Register') }}</h2>
            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 font-semibold">Name</label>
                    <input id="name" name="name" type="text" required autofocus autocomplete="name"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm h-11 bg-gray-100 px-2">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-semibold">Email Address</label>
                    <input id="email" name="email" type="email" required autocomplete="email"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm h-11 bg-gray-100 px-2">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-semibold">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="new-password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm h-11 bg-gray-100 px-2">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="block text-gray-700 font-semibold">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        autocomplete="new-password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm h-11 bg-gray-100 px-2">
                </div>
                <button type="submit"
                    class="w-full bg-[#E76364] text-white font-semibold py-2 rounded-md focus:outline-none focus:ring-opacity-50">Register</button>
            </form>
        </div>
    </div>
@endsection
