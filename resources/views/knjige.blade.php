<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('title', 'Knjige')

@section('content')
<h2>Lista knjiga</h2>
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Naslov</th>
<th>Autor</th>
<th>Godina</th>
<th>Status</th>
</tr>
</thead>
<tbody>
@forelse($knjige as $knjiga)
<tr class="{{ $knjiga['procitana'] ? 'table-success' : 'table-secondary' }}">
<td>{{ $loop->iteration }}</td>
<td>{{ $knjiga['naslov'] }}</td>
<td>{{ $knjiga['autor'] }}</td>
<td>{{ $knjiga['godina'] }}</td>
<td>{{ $knjiga['procitana'] ? 'Pročitano' : 'Nije pročitano' }}</td>
</tr>
@empty
<tr>
<td colspan="5">Nema knjiga</td>
</tr>
@endforelse
</tbody>
</table>

<p><strong>Pročitano {{ $procitano }} od {{ $ukupno }} knjiga</strong></p>
@endsection
</body>
</html>