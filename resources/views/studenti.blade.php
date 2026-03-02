<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('title', 'Studenti')
@section('content')
    <h1 class="mb-4">🎓 Studenti</h1>
    <div class="row">
        @foreach($studenti as $student)
            @include('partials._student-kartica', ['student' => $student])
        @endforeach
    </div>
@endsection
</body>
</html>