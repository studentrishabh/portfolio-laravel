@extends('layout')

@section('content')

<h2>My Projects</h2>

<div class="grid">
    @foreach($projects as $project)
    <div class="card">
        <img src="{{ asset($project['image']) }}">
        <h3>{{ $project['title'] }}</h3>
        <p>{{ $project['desc'] }}</p>
    </div>
    @endforeach
</div>

@endsection