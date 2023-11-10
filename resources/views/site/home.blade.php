@extends('master')

@section('title', 'Home - Hotel')
<style>
    #navbar {
        background-color: #243a69 !important;
        color: #f4f4f2 !important;
    }
    #navbar a{
        color: #f4f4f2 ;
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
                    @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item color-black" style="color: #191013" href="{{ route('user.profile') }}">Profile</a></li>
                                <li><a class="dropdown-item color-black" style="color: #191013" href="#">Suas reservas</a></li>
                                <li>
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
    <div class="container">
        <div class="row">
            <div class="col"> </div>
        </div>
    </div>
@endsection
