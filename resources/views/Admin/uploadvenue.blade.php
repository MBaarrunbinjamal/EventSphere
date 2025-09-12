@extends('Admin.navfooter')
@section('content')
<div class="container">
    <h3>Upload a Venue</h3>
    @if(@session('message'))

    <div
        class="alert alert-success alert-dismissible fade show"
        role="alert"
    >
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
        <strong>Alert</strong>
        <p>Venue has been uploaded</p>
    </div>
    
    <script>
        var alertList = document.querySelectorAll(".alert");
        alertList.forEach(function (alert) {
            new bootstrap.Alert(alert);
        });
    </script>
    
    @endif
    <form action="/uploadvenue" method="post">
        @csrf
        <input type="text" name="venue_name">
        <br>
        <input type="number" name="venue_seats">
        <br>
        <button type="submit">Upload Venue</button>
    </form>
</div>
@endsection