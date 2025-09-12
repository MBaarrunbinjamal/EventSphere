<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EventSphere Admin Dashboard</title>
  <link rel="icon" type="image/png" href="{{ asset('clients/assets/images/logo5.png') }}">

  <!-- Bootstrap CSS yaha -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons yaha -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>

html, body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  width: 100%;
}

html, body {
  overflow-x: hidden;
  width: 100%;
}



    body {
      font-family: 'Segoe UI', sans-serif;
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

    .navbar {
      background: linear-gradient(90deg, #000000ff, #cf0000ff);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
     
      
    }
    .navbar-brand, .nav-link, .dropdown-toggle, .btn-logout {
      color: #fff !important;
    }
    .nav-link:hover, .dropdown-toggle:hover, .btn-logout:hover {
      color: #919191 !important;
    }
    .dropdown-menu {
      right: 0;
      left: auto;
      
    }

    
    @media (min-width: 992px) {
      .center-links {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
      }
    }
   .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") !important;
}



  
  .nav-link {
  position: relative;
  display: inline-block;
  padding-bottom: 4px;
  transition: color 0.3s ease;
}

.nav-link::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 2px;
  background-color: #ffffff; 
  transition: width 0.3s ease;
}

.nav-link:hover::after {
  width: 100%;
}



      
      .reviews {
    height: 60px;
    width: 60px;
    background-color: #ffffff;
    border-radius: 50%;
    z-index: 3;
    position: fixed;
    bottom: 350px;
    right: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.42);
    cursor: pointer;
    animation: bounce 2s ease-in-out infinite; 
}

.reviews img {
    width: 80px;  
    height: 80px;
    object-fit: contain;
}


@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}


#overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.55);
    z-index: 1000;
}


#reviewForm {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1001;
    max-width: 400px;
    width: 90%;
}


.glass-card {
    padding: 28px;
    border-radius: 14px;
    background: linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.03));
    border: 1px solid rgba(233, 186, 0, 1);
    backdrop-filter: blur(10px) saturate(120%);
    -webkit-backdrop-filter: blur(10px) saturate(120%);
    box-shadow: 0 8px 30px rgba(8,10,14,0.45);
    color: #fff;
    animation: fadeIn 0.3s ease;
}


.header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
}
.logo {
    width: 46px;
    height: 46px;
    border-radius: 10px;
    display: inline-grid;
    place-items: center;
    font-weight: 700;
    font-size: 18px;
    color: #0b1220;
    background: linear-gradient(135deg, #fff, #ffe8b3);
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
}
.title {
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    margin: 0;
}
.subtitle {
    margin: 0;
    margin-top: 4px;
    color: rgba(255,255,255,0.8);
    font-size: 13px;
}


.field {
    display: flex;
    flex-direction: column;
    margin-bottom: 12px;
}
label {
    font-size: 13px;
    color: rgba(255,255,255,0.9);
    margin-bottom: 6px;
}
input[type="text"],
input[type="email"],
textarea {
    padding: 12px 14px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.06);
    background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
    color: #fff;
    outline: none;
    font-size: 14px;
}
input:focus, textarea:focus {
    border-color: rgba(255, 174, 0, 1);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.295);
}


.Sbtn {
    background: #dfab00ff;
    color: #fff;
    padding: 10px 14px;
    border: none;
    border-radius: 10px;
    font-weight: 500;
    cursor: pointer;
    width: 100%;
}
.Sbtn:hover {
    background: #ffc400ff;
    color: #000000ff;
}


.close-btn {
    position: absolute;
    top: 8px;
    right: 8px;
    background: red;
    color: white;
    border: none;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 4px;
    width: 28px;
    height: 28px;
    line-height: 24px;
    text-align: center;
}


@keyframes fadeIn {
    from {opacity: 0; transform: translate(-50%, -48%);}
    to {opacity: 1; transform: translate(-50%, -50%);}
}


.inp {
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.82);
   background: rgba(255, 255, 255, 0.1);
  
}



  </style>
</head>
<body class="pt-5 pb-5">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    
    <a class="navbar-brand fw-bold" href="/dash">
      <img src="{{ asset('clients/assets/images/logo5.png') }}" alt="Propello Logo" style="height:40px; width:auto;">
    </a>

    
    <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="/student">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="">Activity</a></li>
        <li class="nav-item"><a class="nav-link" href="">Media</a></li>
        <li class="nav-item"><a class="nav-link" href="">Setting</a></li>
        <li class="nav-item"><a class="nav-link" href="/">Back to Website</a></li>
      </ul>

     
      <form class="d-flex me-3" role="search" action="/search" method="GET">
        <input class="form-control form-control-sm bg-dark text-white border-0 me-2" type="search" name="q" placeholder="Search..." aria-label="Search">
        <button class="btn btn-sm btn-outline-light" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </form>

      
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">
          <i class="bi bi-box-arrow-right"></i> Logout
        </button>
      </form>
    </div>
  </div>
</nav>



 <div class="reviews" id="addReviewBtn">
    <a href="#">
        <img src="{{ asset('clients/assets/images/reviewbtn.png') }}" alt="Review">
    </a>
</div>


<div id="reviewForm" style="display:none;" class="glass-card" role="region" aria-label="Add review">
   
    <button type="button" id="closeReviewForm" class="close-btn">&times;</button>

    <div class="header">
        <div class="logo" aria-hidden="true">★</div>
        <div>
            <h1 class="title">Add a review</h1>
            <p class="subtitle">Share your experience — we read every review.</p>
        </div>
    </div>

    <form method="POST" action="/reviews" enctype="multipart/form-data">
        @csrf
        <div class="field">
            <label for="name">Your Name</label>
            <input id="name" name="name" type="text" placeholder="e.g. xyz" required aria-required="true" />
        </div>

        <div class="field">
            <label for="email">Your Email</label>
            <input id="email" name="email" type="email" placeholder="you@example.com" required aria-required="true" />
        </div>

        <div class="field">
            <label for="review">Your Review</label>
            <textarea id="review" name="review" placeholder="Tell us what you liked (or didn't)..." required aria-required="true"></textarea>
        </div>

        <button type="submit" class="Sbtn">Submit Review</button>
    </form>
</div>


<script>
document.addEventListener('click', function(event) {
    const form = document.getElementById('reviewForm');
    const reviewBtn = document.getElementById('addReviewBtn');

    
    if (form.style.display === 'block' &&
        !form.contains(event.target) &&
        !reviewBtn.contains(event.target)) {
        form.style.display = 'none';
    }
});
</script>

 <script>
document.getElementById('addReviewBtn').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('reviewForm').style.display = 'block';
});
document.getElementById('closeReviewForm').addEventListener('click', function() {
    document.getElementById('reviewForm').style.display = 'none';
});
</script>

<!-- main -->
<br><br>

<div>
  <h1 class="text-center">Change Password</h1>
</div>
<br>

<form id="passwordForm" onsubmit="return validatePasswords()">
  <p class="text-center">New Password:</p>
  <center>
    <input 
      class="w-50 inp form-control" 
      type="password" 
      id="newPassword" 
      required 
      minlength="6"
      placeholder="Enter new password">
  </center>
  <br>

  <p class="text-center">Confirm Password:</p>
  <center>
    <input 
      class="w-50 inp form-control" 
      type="password" 
      id="confirmPassword" 
      required 
      placeholder="Re-enter new password">
  </center>
  <br>

  <center>
    <button class="btn btn-primary" type="submit">Update Password</button>
  </center>
</form>

<script>
function validatePasswords() {
  const newPassword = document.getElementById("newPassword").value;
  const confirmPassword = document.getElementById("confirmPassword").value;

  if (newPassword !== confirmPassword) {
    alert("Passwords do not match!");
    return false; // stop form submission
  }
  return true; // allow submission
}
</script>
<!-- footer start -->
 <footer class="bg-dark text-white text-center text-lg-start mt-auto shadow-sm fixed-bottom">
  <div class="container-fluid py-3 px-4 d-flex flex-column flex-lg-row justify-content-between align-items-center">
    <div class="mb-2 mb-lg-0">
      <span>&copy; 2025 EventSphere. All rights reserved.</span>
    </div>
    <div>
      <a href="#" class="text-white me-3 text-decoration-none">Privacy Policy</a>
      <a href="#" class="text-white text-decoration-none">Terms & Conditions</a>
    </div>
  </div> 
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
