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
    overflow-x: hidden; /* 🚀 Prevents horizontal scrollbar */
  }

  @keyframes gradientFlow {
    0% { background-position: 0% 50%; }
    25% { background-position: 50% 100%; }
    50% { background-position: 100% 50%; }
    75% { background-position: 50% 0%; }
    100% { background-position: 0% 50%; }
  }

  /* Card responsiveness */
  .card {
    max-width: 100%;   /* prevents overflow */
    border-radius: 12px;
  }

  .form-control, 
  .form-select {
    width: 100%;  /* ensures input/select never exceed container */
  }

  /* Fix button responsiveness */
  .btn-lg {
    white-space: nowrap; /* button text won’t break weirdly */
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

<div class="container mt-5">
  <div class="card shadow mbx">
    <div class="card-header bg-dark text-white d-flex flex-wrap justify-content-between align-items-center">
      <h3 class="mb-2 mb-md-0">
        <i class="fas fa-bullhorn me-2"></i>Share Important Updates
      </h3>
      <a href="{{ route('view.announcements') }}" class="btn subtn">
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
          <button type="submit" class="btn subtn btn-lg px-5">
            <i class="fas fa-paper-plane me-2"></i>Send Update
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<br><br><br><br>
@endsection
