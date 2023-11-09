@extends('master')

@section('title', 'Home - Hotel')
<style>
    
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="text-center">Home page</h2>
            </div>
            <div class="col-4"> 
                <p class="text-center"><a href="{{ route('login.index') }}">Login</a></p>
                <p class="text-center"><a href="">Register</a></p>
            </div>
        </div>
    </div>
@endsection