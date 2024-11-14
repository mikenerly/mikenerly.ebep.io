@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
<div class="container">
    <h1>Edit Announcement</h1>

    <form action="{{ route('announcements.update', ['announcement' => $announcement->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $announcement->title }}" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $announcement->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $announcement->date }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Announcement</button>
    </form>
</div>
@endsection
