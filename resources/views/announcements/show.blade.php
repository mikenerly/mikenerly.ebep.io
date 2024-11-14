@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Announcement Details</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $announcement->title }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Date:</strong> {{ $announcement->date }}</p>
            <p><strong>Content:</strong></p>
            <p>{{ $announcement->content }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('announcements.index') }}" class="btn btn-primary">Back to Announcements</a>
        </div>
    </div>
</div>
@endsection
