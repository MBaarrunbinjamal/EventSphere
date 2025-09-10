
@extends('Admin.navfooter')
@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">
                <i class="fas fa-bullhorn me-2"></i>Posted Updates
            </h3>
            <a href="{{ route('announcement') }}" class="btn btn-light">
                <i class="fas fa-plus me-2"></i>New Update
            </a>
        </div>
        <div class="card-body p-4">
            @if($announcements->count() > 0)
                @foreach($announcements as $announcement)
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">{{ $announcement->title }}</h4>
                            <p class="card-text">{{ $announcement->content }}</p>
                            <div class="d-flex justify-content-between align-items-center text-muted">
                                <small>
                                    <i class="fas fa-users me-1"></i>
                                    @if($announcement->role == 1)
                                        Everyone
                                    @elseif($announcement->role == 2)
                                        Students Only
                                    @else
                                        Event Organizers
                                    @endif
                                </small>
                                <small>
                                    <i class="fas fa-clock me-1"></i>
                                    {{ $announcement->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center py-5">
                    <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                    <h4>No updates yet</h4>
                    <p class="text-muted">Start by creating your first update</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection