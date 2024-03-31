@extends('layouts.app')

@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="mx-20 my-10">
        <div class="card w-full bg-base-300 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Card title!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
@endsection
