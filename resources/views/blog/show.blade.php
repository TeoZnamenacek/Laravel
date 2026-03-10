<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('title', $clanak['naslov'])
@section('content')
<div class="container mt-4" style="max-width:760px">
    <a href="{{ route('blog.index') }}" class="btn btn-secondary mb-3">← Natrag</a>
    <h1>{{ $clanak['naslov'] }}</h1>
    <p class="text-muted">Autor: {{ $clanak['autor'] }} · Datum: {{ $clanak['datum'] }}</p>
    <hr>
    <p>{{ $clanak['sadrzaj'] }}</p>
</div>
@endsection
</body>
</html>