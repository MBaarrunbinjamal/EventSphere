@extends('Admin.navfooter')
@section('content')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <style>
body {
  /* background: linear-gradient(90deg, #000000, #1a0023, #2c003e);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color: #fff;     Optional: ensures text stays readable */
}

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
</style>
<br>
<div>
  <h1 class="text-center mb-4">Welcome {{ Auth::user()->name }}</h1>
</div>
        

@endsection
