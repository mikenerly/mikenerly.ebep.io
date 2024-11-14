@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
<div class="container">
    <h1>Announcements</h1>

    <a href="{{ route('announcements.create') }}" class="btn btn-primary mb-3">Create New Announcement</a>

    @if(count($announcements) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($announcements as $announcement)
            <tr>
                <td>{{ $announcement->title }}</td>
                <td>{{ $announcement->date }}</td>
                <td>
                    <a href="{{ route('announcements.show', ['announcement' => $announcement->id]) }}" class="btn btn-info">View</a>
                    <a href="{{ route('announcements.edit', ['announcement' => $announcement->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('announcements.destroy', ['announcement' => $announcement->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No announcements available.</p>
    @endif
</div>
@endsection
