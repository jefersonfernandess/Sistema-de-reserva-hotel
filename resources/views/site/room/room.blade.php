@extends('master')

@section('title', 'Quarto - Hotel')
<style>

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
    </div>
@endsection
