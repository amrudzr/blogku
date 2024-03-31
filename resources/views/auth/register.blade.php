@extends('layouts.app')

@section('title')
    {{ 'Register' }}
@endsection

@section('content')
    <div class="min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md p-8 bg-base-300 rounded shadow-md">
            <h1 class="text-2xl font-bold text-center mb-4">Register</h1>
            <form class="space-y-auto" action="{{ route('register.post') }}" method="post">
                @csrf
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" name="name" placeholder="Enter your name" class="input input-bordered w-full" required>
                </div>
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
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Confirm Password</span>
                    </label>
                    <input type="password" name="confirm_password" placeholder="Confirm your password" class="input input-bordered w-full" required>
                </div>
                <button type="submit" class="btn btn-primary w-full mt-4">Register</button>
            </form>
            <p class="text-center mt-4 text-sm">Have an account?
                <a href="{{ route('login.page') }}" class="text-primary font-bold hover:underline">
                    Login Now
                </a>
            </p>
        </div>
    </div>
@endsection
