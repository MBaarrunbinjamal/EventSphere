<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Conference</title>

    <!-- css -->
    <link rel="stylesheet" href="organizer/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="organizer/bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="organizer/assets/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

#event-form {
  background: linear-gradient(135deg, #1a1a1d, #4e0000, #111111);
  background-size: 400% 400%;
  animation: gradientFlow 15s ease infinite;
  padding: 60px 0;
  color: #fff;
}

@keyframes gradientFlow {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

#event-form .section-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #fff;
  text-shadow: 0 3px 10px rgba(0, 0, 0, 0.6);
}

#event-form p.text-muted {
  color: #ddd !important;
  font-size: 1rem;
}


#event-create-form {
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(12px);
  border-radius: 16px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  padding: 35px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.4);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#event-create-form:hover {
  transform: translateY(-6px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.55);
}


#event-create-form .form-label {
  color: #f8f8f8;
  font-size: 0.95rem;
}


#event-create-form .form-control,
#event-create-form .form-select,
#event-create-form textarea {
  background: rgba(255, 255, 255, 0.15);
  border: 1px solid rgba(255, 255, 255, 0.25);
  color: #fff;
  border-radius: 10px;
  padding: 10px 14px;
  width: 100%;
  transition: 0.3s ease;
}

#event-create-form .form-control:focus,
#event-create-form .form-select:focus,
#event-create-form textarea:focus {
  background: rgba(255, 255, 255, 0.25);
  border-color: #ff4747;
  box-shadow: 0 0 8px rgba(255, 71, 71, 0.7);
  outline: none;
}


#event-create-form ::placeholder {
  color: rgba(255, 255, 255, 0.7);
}


#event-create-form button {
  background: linear-gradient(45deg, #ff1e1eff, #2c0000ff, #000000ff);
  border: none;
  border-radius: 12px;
  font-weight: 600;
  font-size: 1.1rem;
  padding: 12px 28px;
  box-shadow: 0 6px 15px rgba(255, 71, 71, 0.4);
  transition: all 0.3s ease;
}

#event-create-form button:hover {
  background: linear-gradient(45deg, #000000ff, #2c0000ff, #ff1e1eff);
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
}

.opt{
    color: black;

}
.box{
    display: none;
    background-color: white;
}
.abc{
    background-color: transparent;
    border: none;
    color: white;
    position: relative;
    font-size: 24px;
    cursor: pointer;
    outline: none;
}
</style>

</head>
<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                
                <div class="site-branding">
                    <a class="logo" href="index.html">
                        <!-- logo image  -->
                        <img src="organizer/assets/images/logo.png" alt="Logo">
                        Conference 2015
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">
            
                    <li class="active"><a data-scroll href="#event-form">Event Form</a></li>
                    <li><a data-scroll href="#speakers">Speakers</a></li>              
                    <li><a data-scroll href="#schedule">Schedule</a></li>                  
                    <li><a data-scroll href="#partner">Partner</a></li>                  
                    <li><a data-scroll href="#faq">FAQ</a></li>
                    <li><a data-scroll href="#photos">Photos</a></li>

                   <button class="abc" onclick="show()"> <i class="fa fa-bell" aria-hidden="true" style="font-size:24px" ></i></button>
                   <div class="box">
                     <ul id="announcementList"></ul>
                   </div>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="site-header" class="site-header valign-center"> 
        <div class="intro">
            <h2>25 April, 2015 / Townhall California</h2>
            <h1>Freelancer Conference 2015</h1>
            <p>First &amp; Largest Conference</p>
            <a class="btn btn-white" data-scroll href="#event-form">Create Event</a>
        </div>
    </header>

   
<section id="event-form" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h3 class="section-title">Create New Event</h3>
                <p class="text-muted">Fill the details below to create your awesome event 🚀</p>
            </div>
        </div>
            
        <form action="/events" method="POST" id="event-create-form">
            @csrf
            <div class="row g-3">
                
                <div class="col-md-6">
                    <label class="form-label fw-bold">Event Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Event Title" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-bold">Category</label>
                    <select class="form-select" name="category" required>
                        <option value="" selected disabled>-- Select Category --</option>
                        <option value="Workshop" class="opt">Workshop</option>
                        <option value="Seminar" class="opt">Seminar</option>
                        <option value="Conference" class="opt">Conference</option>
                        <option value="Webinar" class="opt">Webinar</option>
                        <option value="Competition" class="opt">Competition</option>
                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label fw-bold">Description</label>
                    <textarea class="form-control" name="description" rows="4" placeholder="Event Description" required></textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-bold">Date</label>
                    <input type="date" class="form-control" name="date" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-bold">Time</label>
                    <input type="time" class="form-control" name="time" required>
                </div>

                <div class="col-12">
                    <label class="form-label fw-bold">Venue</label>
               <select name="venue" id="venue" class="form-select" required> 
    <option value="" selected disabled>-- Select Venue --</option>
    @foreach($ven as $v)
        <option value="{{$v->id}}">{{$v->venue_name}} | {{$v->venue_seats}}</option>
    @endforeach
</select>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit Event</button>
            </div>
        </form>
    </div>
</section>


  
    <section id="facts" class="section bg-image-1 facts text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <i class="ion-ios-calendar"></i>
                    <h3>2015<br>June 25</h3>
                </div>
                <div class="col-sm-3">
                    <i class="ion-ios-location"></i>
                    <h3>California<br>USA</h3>
                </div>
                <div class="col-sm-3">
                    <i class="ion-pricetags"></i>
                    <h3>150<br>Tickets</h3>
                </div>
                <div class="col-sm-3">
                    <i class="ion-speakerphone"></i>
                    <h3>06<br>Speakers</h3>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>

   

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and <br> Developed by <a href="http://technextit.com">Technext Limited</a></p>
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="organizer/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="organizer/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="organizer/bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="organizer/assets/js/main.js"></script>
    @if(session('success'))
   
   <script>
        Swal.fire({
            icon: 'success',
            title: 'Success 🎉',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
       
    </script>
@endif
<script> function loadAnnouncements() {
    $.ajax({
        url: "/fetch-announcements",
        type: "GET",
        success: function(response) {
            if (response.status) {
                $("#announcementList").empty();
                response.data.forEach(function(item) {
                    $("#announcementList").append(
                        "<li><strong>" + item.title + "</strong>: " + item.content + "</li>"
                    );
                });
            } else {
                $("#announcementList").html("<li>No announcements available</li>");
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
}

$(document).ready(function() {
    loadAnnouncements();
});      
function show(){
    var box=document.getElementsByClassName('box');
    if(box[0].style.display==='none'){
        box[0].style.display='block';
    }
    else{
        box[0].style.display='none';

       
   }
}
</script>
</body>
</html>
 