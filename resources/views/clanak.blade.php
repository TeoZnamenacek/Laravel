@extends('layouts.app')

@section('title', 'Blog članci')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>📰 Blog članci</h1>
        <span class="badge bg-danger fs-6">{{ count($clanci) }} članaka</span>
    </div>

    @forelse($clanci as $clanak)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">{{ $loop->iteration }}. {{ $clanak['naslov'] }}</h5>
                    <span class="badge bg-secondary">{{ $clanak['kategorija'] }}</span>
                </div>
                <div class="mt-2">
                    @for($i = 1; $i <= 5; $i++)
                        {{ $i <= $clanak['ocjena'] ? '⭐' : '☆' }}
                    @endfor
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-warning">Nema objavljenih članaka.</div>
    @endforelse
@endsection