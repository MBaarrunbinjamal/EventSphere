@extends('Admin.navfooter')
@section('content')
<style>
body {
  background: linear-gradient(-45deg, #ca0000ff, #000000, #444444, #550000ff);
  background-size: 400% 400%;
  animation: gradientFlow 20s ease infinite;
  color: #fff;
  min-height: 100vh;
  margin: 0;
  padding: 0;
}


@keyframes gradientFlow {
  0% {
    background-position: 0% 50%;
  }
  25% {
    background-position: 50% 100%;
  }
  50% {
    background-position: 100% 50%;
  }
  75% {
    background-position: 50% 0%;
  }
  100% {
    background-position: 0% 50%;
  }
}


.subtn{
    background: #ffb700ff;
  }
    .subtn:hover{
        background: #e6a200ff;
        color: #000000ff;
    }

    .mbx{
        border: 4px solid #e6a200ff;
    }
</style>

<div class="container mt-5 ">
    <div class="card shadow mbx">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">
                <i class="fas fa-bullhorn me-2"></i>Posted Updates
            </h3>
            <a href="{{ route('announcement') }}" class="btn subtn">
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