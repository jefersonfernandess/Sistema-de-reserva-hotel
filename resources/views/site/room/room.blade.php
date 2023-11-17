@extends('master')

@section('title', 'Quarto - Hotel')
<style>
    .header {
        margin-top: 2rem;
    }

    .photos_img-main {
        width: 100%;
        height: 30rem;
        border-radius: 1rem;
    }

    .main_content {
        margin-top: 2rem;
    }

    .main_content_description p {
        font-size: 1.2rem;
    }

</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header">
                    <h1>{{ $room->room_title }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach ($room->RoomImage as $image)
                    <div class="photos">
                        <img class="photos_img-main" src="{{ asset('storage/' .$image->image_path) }}" alt="Imagem">
                    </div>
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="main_content main_content_description">
                    <h2>{{ $room->room_description }}</h2>
                    <p>Andar: N°{{ $room->room_number }} - {{ $room->room_type }} - {{ $room->status }}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto expedita possimus nam ut! Rem voluptas voluptatum natus, obcaecati deleniti neque nemo incidunt labore culpa, hic eligendi earum asperiores temporibus quasi?</p>
                </div>
            </div>
            <div class="col-4">
                <div class="main_content main_content_reservation">
                    <h2>{{ $room->price }}</h2>
                    <div class="date">
                        <input type="date" name="checkin" id="">
                        <input type="date" name="checkout" id="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
