<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('title', 'Vijesti')

@section('content')
@foreach($vijesti as $vijest)
    <div class="card mb-3">
        <div class="card-body">
            <h5>{{ $vijest['naslov'] }}</h5>

            {{-- Loše: tvrdo kodiran URL --}}
            <!-- <a href="/vijesti/{{ $vijest['id'] }}">Čitaj više</a> -->

            {{-- Dobro: koristimo ime rute --}}
            <a href="{{ route('vijesti.show', $vijest['id']) }}" class="btn btn-primary btn-sm">
                Čitaj više
            </a>
        </div>
    </div>
@endforeach


@endsection
</body>
</html>