@extends('Admin.navfooter')
@section('content')

<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h2 class="mb-3">Reviews (Admin)</h2>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Review</th>
                <th>Status</th>
                <th>Submitted</th>
                <th style="width: 220px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reviews as $review)
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->name }}</td>
                    <td>{{ $review->email }}</td>
                    <td style="max-width:400px; white-space:normal;">{{ $review->review }}</td>
                    <td>
                        @if($review->status === 'pending')
                            <span class="badge bg-warning text-dark">Pending</span>
                        @elseif($review->status === 'accepted')
                            <span class="badge bg-success">Accepted</span>
                        @else
                            <span class="badge bg-danger">Denied</span>
                        @endif
                    </td>
                    <td>{{ $review->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <!-- Accept -->
                        <form method="POST" action="{{ route('admin.reviews.update', $review) }}" style="display:inline-block;">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="accepted">
                            <button class="btn btn-sm btn-success" type="submit" {{ $review->status === 'accepted' ? 'disabled' : '' }}>Accept</button>
                        </form>

                        <!-- Deny -->
                        <form method="POST" action="{{ route('admin.reviews.update', $review) }}" style="display:inline-block;">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="denied">
                            <button class="btn btn-sm btn-warning" type="submit" {{ $review->status === 'denied' ? 'disabled' : '' }}>Deny</button>
                        </form>

                        <!-- Delete -->
                        <form method="POST" action="{{ route('admin.reviews.destroy', $review) }}" style="display:inline-block;" onsubmit="return confirm('Delete this review?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">No reviews yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
