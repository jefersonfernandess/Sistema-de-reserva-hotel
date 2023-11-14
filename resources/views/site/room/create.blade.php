@extends('master')

@section('title', 'Login - Hotel')
<style>
    body {
        background-image: url("{{ asset('img/bg.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin: 10 auto;
        height: 80%;
    }

    .form-login {
        background-color: rgb(238, 238, 238);
        padding: 1.5rem;
        border: 1px solid black;
        border-radius: 1rem;
    }

    .form-login label {
        font-size: 0.8rem;
    }

    .row {
        margin-bottom: 1rem;
    }

    .form-login input {
        font-size: 1.2rem;
        padding: 0.5rem;
    }

    .form-login button {
        width: 100%;
        margin-bottom: 1rem;
    }

    .errorMessage {
        color: red;
    }
</style>
@section('content')
    <div class="container content">
        <form id="form" class="form-login" action="{{ route('room.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2>New room</h2>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center">
                    <input type="text" name="room_number" id="room_number" placeholder="Room number" required>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center">
                    <input type="text" name="room_description" id="room_description" placeholder="Room description" required>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center">
                    <input type="text" name="room_type" id="room_type" placeholder="Room Type" required>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center">
                    <input type="text" name="status" id="status" placeholder="Status" required> 
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-dark" type="submit">Create new room</button>
                </div>
            </div>
            @if (session('fail'))
                <div class="row">
                    <div class="col d-flex justify-content-center ">
                        <p class="errorMessage">{{ session('fail') }}</p>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col d-flex justify-content-center ">
                    <p>Back to <a href="{{ route('home.index') }}">home</a></p>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ asset('js/login/validation.js') }}"></script>
@endsection
