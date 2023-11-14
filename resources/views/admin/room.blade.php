@extends('master')

@section('title', 'Admin - Hotel')
<style>

</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Profile page</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <p>Nome: {{ Auth::user()->name }}</p>
                <p>Email: {{ Auth::user()->email }}</p>
            </div>
            <div class="col-4">
                
            </div>
        </div>

    @endsection
