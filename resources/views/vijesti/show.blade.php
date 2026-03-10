<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('title', $vijest['naslov'])

@section('content')
<div class="container mt-4">
    <a href="/vijesti" class="btn btn-secondary mb-3">← Natrag</a>

    <h1>{{ $vijest['naslov'] }}</h1>
    <p class="text-muted">Objavljeno: {{ $vijest['datum'] }}</p>
    <hr>
    <p>{{ $vijest['sadrzaj'] }}</p>
</div>
@endsection
</body>
</html>