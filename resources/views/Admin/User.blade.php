@extends('admin.navfooter')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

  .section {
    padding-top: 80px;
  }


  .cool-btn {
    background: linear-gradient(135deg, #ff0000, #990000);
    color: #fff;
    border: none;
    border-radius: 12px;
    padding: 10px 20px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
  }

  .cool-btn:hover {
    background: linear-gradient(135deg, #cc0000, #660000);
    transform: scale(1.05);
    box-shadow: 0 6px 14px rgba(0, 0, 0, 0.6);
  }

  .cool-btn:active {
    transform: scale(0.95);
  }
</style>

<div class="d-flex justify-content-between align-items-center mt-5 px-4">
  <a href="{{ route('users.export.excel') }}" class="cool-btn">⬇ Download Excel</a>
  <a href="{{ route('users.export.pdf') }}" class="cool-btn">⬇ Download PDF</a>
</div>

<div class="section px-4">
  <div class="table-responsive">
    <table class="table table-primary table-striped text-dark shadow-lg rounded">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Current Role</th>
          <th scope="col">Change Role</th>
        </tr>
      </thead>
      <tbody>
        @foreach($rec as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->email }}</td>
          <td><span class="badge bg-info">{{ $item->role }}</span></td>
          <td>
            <form action="{{ route('roleUpdate', $item->id) }}" method="POST" class="d-flex gap-2 align-items-center">
              @csrf
              <input type="hidden" name="user_id" value="{{ $item->id }}">
              <select name="role" class="form-select form-select-sm w-auto">
                <option value="">Select New Role</option>
                @foreach (['Admin', 'organizer', 'user'] as $role)
                <option value="{{ $role }}" {{ $item->role === $role ? 'selected' : '' }}>{{($role) }}</option>
                @endforeach
              </select>
              <button type="submit" class="btn btn-sm btn-success">
                <i class="fas fa-user-edit"></i> Update
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif -->
</div>
@endsection