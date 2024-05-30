@extends('auth.layout')

@section('content')
    <div class="w-[33%] mt-14 mx-auto px-4 py-8 h-[85%] bg-[#EEEEF8] rounded-[0.5rem]">
        <h2 class="text-2xl mx-4 underline decoration-purple-600 font-bold mb-6 text-gray-800 first-letter:text-purple-600">Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="firstname" class="block text-gray-700">First Name</label>
                <input type="text" id="firstname" name="firstname" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            </div>
            <div class="mb-4">
                <label for="lastname" class="block text-gray-700">Last Name</label>
                <input type="text" id="lastname" name="lastname" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            </div>
            <div class="mb-4">
                <label for="confirm-password" class="block text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            </div>
            <div>
                @if(session()->has('errors'))
                    <p class="text-sm text-red-600 mx-2">* {{ $errors->first() }}</p>
                @endif
                @if(session()->has('success'))
                    Hell yeah
                @endif
            </div>

            <button type="submit" class="w-full mt-4 bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition duration-300">Register</button>
        </form>
        <p class="mt-2 text-gray-600 text-center">Already have an account? <a href="/login" class="text-purple-600 hover:underline">Login</a></p>
    </div>
@endsection

