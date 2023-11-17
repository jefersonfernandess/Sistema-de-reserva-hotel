@extends('master')

@section('title', 'Home - Hotel')
<style>
    body {
        height: 100%;
    }

    #navbar {
        background-color: #243a69 !important;
        color: #f4f4f2 !important;
    }

    #navbar a {
        color: #f4f4f2;
    }

    .main-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin-top: 2rem;
        height: 80%;
    }

    .card_link {
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        border: none;
        color: inherit;

    }

    .card_link:hover {
        text-decoration: none;
        border: none;
        color: inherit;
    }

    .card {
        width: 20rem;
        height: 23rem;
        border: none !important;
        margin-top: 1rem;
        gap: 1rem;
    }

    .card_img {
        width: 20rem;
        height: 15rem;
        border-radius: 1rem;
        margin-bottom: 0.5rem;

    }

    .card_img_imagem {
        width: inherit;
        height: inherit;
        border-radius: 1rem;
    }

    .card_text {
        display: flex;
        flex-direction: column;
    }

    .card_text_text {

        margin-bottom: 0;
    }
</style>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Hotel-JL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <ul class="navbar-nav">
                @if ($userData)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $userData->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item color-black" style="color: #191013"
                                    href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a class="dropdown-item color-black" style="color: #191013" href="#">Your
                                    reservations
                                </a></li>
                            @if ($userData->UserRole->contains('Role.name', 'admin'))
                                <li><a class="dropdown-item color-black" style="color: #191013"
                                        href="{{ route('room.create') }}">Create new room</a></li>
                            @endif
                            <form action="{{ route('login.logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                    </li>
            </ul>
        @else
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('login.index') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('register.index') }}">Register</a>
            </li>
            @endif
            </ul>
        </div>
    </div>
</nav>
@section('content')
    <div class="container">
        <div class="row ">
            @foreach ($rooms as $room)
                @foreach ($room->RoomImage as $image)
                    <div class="col-4">
                        <a class="card_link" href="{{ route('home.room', $room->id) }}">
                            <div class="card">
                                <div class="card_img">
                                    <img class="card_img_imagem" src="{{ asset('storage/' . $image->image_path) }}"
                                        alt="Image">
                                </div>
                                <div class="card_text">
                                    <p class="card_text_text"><b>{{ $room->room_title }}</b></p>
                                    <p class="card_text_text">Quarto: N° <b>{{ $room->room_number }}</b></p>
                                    <p class="card_text_text">{{ $room->room_description }}</p>
                                    <p class="card_text_text"><b>R${{ $room->price }}</b> noite</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    <footer class="footer fixed-bottom text-center text-white" style="background-color: #f1f1f1;">
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright: <a class="text-dark" href="https://github.com/jefersonfernandess/Sistema-de-reserva-hotel"
                target="_blank">Jeferson Fernandes</a>
        </div>
    </footer>
@endsection
