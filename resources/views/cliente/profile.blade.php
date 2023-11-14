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
                <p>Nome: {{ $userData->name }}</p>
                <p>Email: {{ $userData->email }}</p>
            </div>
            @if ($userData->UserRole->contains('Role.name', 'admin'))
                <div class="col-4">
                    <p><a href="{{ route('room.index') }}">room</a></p>
                </div>
            @endif
        </div>

    @endsection
