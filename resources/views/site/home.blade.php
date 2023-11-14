@extends('master')

@section('title', 'Home - Hotel')
<style>
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

    .link-room {
        text-decoration: none;
        color: #191013;
    }

    .link-room:hover {
        color: #191013;
    }
</style>
@section('content')
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
                </li>
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

    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <a class="link-room" href="#">
                            <img src=" {{ asset('img/rooms/room1.jpg') }}" class="card-img-top" alt="...">

                            <div class="card-body">
                                <p class="card-text">Quarto 1</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{ asset('img/rooms/room1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Quarto 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{ asset('img/rooms/room1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Quarto 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{ asset('img/rooms/room1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Quarto 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{ asset('img/rooms/room1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Quarto 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{ asset('img/rooms/room1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Quarto 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{ asset('img/rooms/room1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Quarto 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src=" {{ asset('img/rooms/room1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Quarto 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-dark" href="">Jeferson Fernandes</a>
        </div>
    </footer>
@endsection
