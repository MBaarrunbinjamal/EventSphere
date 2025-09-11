@extends('Admin.navfooter')
@section('content')
<br>
<br>
<div class="section px-4">
    <div class="table-responsive">
        <table class="table table-primary table-striped text-dark shadow-lg rounded">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                     <th scope="col">Category</th>
                      <th scope="col">Venue</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->Title }}</td>
                    <td>{{ $event->Description }}</td>
                    <td>{{ $event->Date }}</td>
                    <td>{{ $event->Time }}</td>
                    <td>{{ $event->category }}</td>
                    <td>{{ $event->venue }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
                          
@endsection