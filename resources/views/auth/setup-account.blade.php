@extends('layouts.app')

@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md p-8 bg-base-300 rounded shadow-md">
            <h1 class="text-2xl font-bold text-center mb-4">Account</h1>
            <form class="space-y-auto" action="{{ route('login.post') }}" method="post">
                @csrf
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input type="text" name="username" placeholder="Enter your username" class="input input-bordered w-full" required>
                </div>
                <button type="submit" class="btn btn-primary w-full mt-4">Save</button>
            </form>
        </div>
    </div>
@endsection
