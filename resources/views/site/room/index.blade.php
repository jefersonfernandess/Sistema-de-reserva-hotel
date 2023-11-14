@extends('master')

@section('title', 'Admin - Hotel')
<style>
    .main-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;

    }

    .content-item {
        display: flex;
        flex-direction: row;
        font-size: 1.2rem;
        gap: 1rem;
    }

    .room-main-img {
        width: 32rem;
        height: 21rem;
    }

    .room-secondary-img {
        width: 15rem;
        height: 10rem;
    }

</style>
@section('content')

@endsection
