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
            <div class="col-md-3 mb-3">
                <div class="card border-{{ $student['polozio'] ? 'success' : 'danger' }}">
                    <div class="card-header bg-{{ $student['polozio'] ? 'success' : 'danger' }} text-white">
                        @if($student['polozio']) ✅ Položio @else ❌ Nije položio @endif
                    </div>
                    <div class="card-body">
                        <h6>{{ $student['ime'] }}</h6>
                        <small class="text-muted">{{ $student['smjer'] }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
</body>
</html>