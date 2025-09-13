@extends('Admin.navfooter')
@section('content')
<div class="container my-4">
    <h3 class="text-center mb-4">Organizer Requests</h3>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive doctor-table-wrapper">
        <table class="table table-striped text-center align-middle">
            <thead class="table-header">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Approved On</th>

                    <th>Status</th>

                </tr>
            </thead>
            <tbody>
                @foreach($organizers as $o)
                <tr>
                    <td>{{ $o->id }}</td>
                    <td>{{ $o->name }}</td>
                    <td>{{ $o->email }}</td>
                    <td>{{ $o->organizerstatus }}</td>
                    <td>{{ $o->updated_at->format('d-m-Y') }}</td>
                    <td>

                    </td>

                    <td>
                        @if($o->organizerstatus == 'Approved')
                        <span class="badge bg-success">Approved</span>
                        @else
                        <span class="badge bg-warning text-dark">Pending</span>
                        @endif
                        <form action="{{ route('acceptOrganizer', $o->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Accept</button>
                        </form>

                        <form action="/delete/{{ $o->id }}" method="POST" class="d-inline-block ms-1">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                        </form>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection