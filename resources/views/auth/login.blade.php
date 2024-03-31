@extends('layouts.app')

@section('title')
    {{ 'Login' }}
@endsection

@section('content')
    <div class="min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md p-8 bg-base-300 rounded shadow-md">
            <h1 class="text-2xl font-bold text-center mb-4">Login</h1>
            <form class="space-y-auto" action="{{ route('login.post') }}" method="post">
                @csrf
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Email Address</span>
                    </label>
                    <input type="email" name="email" placeholder="Enter your email" class="input input-bordered w-full" required>
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" name="password" placeholder="Enter your password" class="input input-bordered w-full" required>
                </div>
                <button type="submit" class="btn btn-primary w-full mt-4">Login</button>
            </form>
            <p class="text-center mt-4 text-sm">Don't have an account?
                <a href="{{ route('register.page') }}" class="text-primary font-bold hover:underline">
                    Register Here
                </a>
            </p>
        </div>
    </div>
@endsection
