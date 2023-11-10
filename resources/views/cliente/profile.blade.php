@extends('master')

@section('title', 'Profile - Hotel')
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
                <form action="{{ route('login.logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>

    @endsection
