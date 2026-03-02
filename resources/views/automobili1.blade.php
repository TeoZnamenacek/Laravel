<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('title', 'Automobili')
@section('content')
    <h1 class="mb-4">🚗 Popis automobila</h1>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr><th>#</th><th>Marka</th><th>Model</th><th>Godina</th></tr>
        </thead>
        <tbody>
            @foreach($automobili1 as $auto)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $auto['marka'] }}</td>
                    <td>{{ $auto['model'] }}</td>
                    <td>{{ $auto['godina'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
</body>
</html>