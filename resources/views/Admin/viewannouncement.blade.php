@extends('Admin.navfooter')
@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">
                <i class="fas fa-bullhorn me-2"></i>All Announcements
            </h3>
            <a href="{{ route('announcement') }}" class="btn btn-light">
                <i class="fas fa-plus me-2"></i>New Announcement
            </a>
        </div>
        <div class="card-body">
            @if($announcements->count() > 0)
                @foreach($announcements as $announcement)
                    <div class="alert alert-info mb-4">
                        <h4>{{ $announcement->title }}</h4>
                        <p>{{ $announcement->content }}</p>
                        <small class="text-muted">
                            Role: {{ $announcement->role }} | 
                            Posted: {{ $announcement->created_at->diffForHumans() }}
                        </small>
                    </div>
                @endforeach
            @else
                <div class="text-center py-5">
                    <h4>No announcements yet</h4>
                    <p>Start by creating your first announcement</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection