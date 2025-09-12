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

/* pfp */
/* Card */
    .profile-card{
      width: 100%;
      max-width: var(--max-width);
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius: var(--radius);
      box-shadow: 0 8px 30px rgba(2,6,23,0.6);
      display:flex;
      gap: 22px;
      padding: 22px;
      align-items:center;
      border: 1px solid rgba(255,255,255,0.04);
    }

    /* Left: avatar */
    .avatar-wrap{
      flex: 0 0 140px;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    .avatar{
      width: 120px;
      height: 120px;
      border-radius: 999px;
      object-fit: cover;
      border: 4px solid var(--glass);
      box-shadow: 0 6px 18px rgba(2,6,23,0.6), 0 1px 0 rgba(255,255,255,0.02) inset;
      background: linear-gradient(135deg, rgba(255,255,255,0.02), rgba(0,0,0,0.12));
    }

    /* Right: info */
    .info{
      flex:1;
      min-width: 0; /* allow text-overflow */
    }

    .name-row{
      display:flex;
      align-items:baseline;
      gap:12px;
      flex-wrap:wrap;
    }

    .name{
      font-size: 1.5rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      margin:0;
    }

    .verified-badge{
      display:inline-flex;
      align-items:center;
      gap:8px;
      background: rgba(110,231,183,0.08);
      color: var(--accent);
      padding: 4px 8px;
      border-radius: 999px;
      font-size: 0.8rem;
      border: 1px solid rgba(110,231,183,0.08);
    }

    .subtitle{
      margin:6px 0 0 0;
      color: var(--muted);
      font-size: 0.95rem;
    }

    .bio{
      margin-top:12px;
      color: #bcd3df;
      font-size: 0.95rem;
      line-height:1.45;
      max-width: 52ch;
    }

    .actions{
      margin-top:16px;
      display:flex;
      gap:10px;
      flex-wrap:wrap;
    }

    .btn{
      padding:8px 14px;
      border-radius: 10px;
      border: none;
      cursor:pointer;
      font-weight:600;
      background: rgba(255,255,255,0.03);
      color: #eaf6f0;
      box-shadow: 0 4px 14px rgba(2,6,23,0.5);
      transition: transform .12s ease, background .12s ease;
    }

    .btn:active{ transform: translateY(1px); }
    .btn:focus{ outline:2px solid rgba(110,231,183,0.18); }

    .btn-primary{
      background: linear-gradient(90deg, #4ade80, #34d399);
      color:#032014;
      box-shadow: 0 6px 20px rgba(52,211,153,0.12);
    }

    .btn-ghost{
      background: transparent;
      border: 1px solid rgba(255,255,255,0.06);
      color: var(--muted);
    }

    /* small screens: stack */
    @media (max-width:620px){
      .profile-card{
        flex-direction: column;
        align-items:center;
        text-align:center;
        padding:18px;
      }
      .avatar-wrap{ margin-top:4px; }
      .avatar{ width:110px; height:110px; }
      .info{ width:100%; }
      .name-row{ justify-content:center; }
      .bio{ max-width:100%; margin-left:0; }
      .actions{ justify-content:center; }
    }

    /* Utility: fallback text-overflow */
    .name, .subtitle { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
 
    


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
        <li class="nav-item"><a class="nav-link" href="/setting">Setting</a></li>
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

<br>
<br>
<!-- main  -->

 <main class="profile-card" role="region" aria-label="User profile card">
    <!-- Left: avatar -->
    <div class="avatar-wrap">
      <!-- change src to your image -->
      <img class="avatar" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=600&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="User avatar">
    </div>

    <!-- Right: info -->
    <div class="info">
      <div class="name-row">
        <h1 class="name" title="Full name">Meer Muhammed</h1>
      </div>

      <p class="subtitle">Student • XYZ College — Karachi, PK</p>

      <p class="bio">
       Dedicated college student, focused on learning and building Future.  
       Enjoys experimenting with life, exploring world, and improving learning skills through practice.
      </p>

      <!-- <div class="actions">
        <button class="btn btn-primary" type="button">Message</button>
        <button class="btn btn-ghost" type="button">View profile</button>
        <button class="btn" type="button" onclick="alert('Replace with real action')">Contact</button>
      </div> -->
    </div>
  </main>


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
