@extends('Admin.navfooter')
@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">
                <i class="fas fa-bullhorn me-2"></i>Share Important Updates
            </h3>
            <a href="{{ route('view.announcements') }}" class="btn btn-light">
                <i class="fas fa-list me-2"></i>View Updates
            </a>
        </div>
        <div class="card-body p-4">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('save.announcement') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label h5">
                        <i class="fas fa-heading me-2"></i>Title of your update
                    </label>
                    <input type="text" 
                           class="form-control form-control-lg" 
                           name="title" 
                           placeholder="What's this about? Keep it short and clear">
                </div>

                <div class="mb-4">
                    <label class="form-label h5">
                        <i class="fas fa-comment-alt me-2"></i>Message details
                    </label>
                    <textarea class="form-control" 
                            name="content" 
                            rows="5" 
                            placeholder="Write your message here. Be specific and informative."></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label h5">
                        <i class="fas fa-users me-2"></i>Who needs to see this?
                    </label>
                    <select name="role" class="form-select form-select-lg">
                        <option value="">-- Select audience --</option>
                        <option value="1">Everyone</option>
                        <option value="2">Students Only</option>
                        <option value="3">Event Organizers</option>
                    </select>
                </div>

                <div class="text-end mt-5">
                    <button type="submit" class="btn btn-primary btn-lg px-5">
                        <i class="fas fa-paper-plane me-2"></i>Send Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
