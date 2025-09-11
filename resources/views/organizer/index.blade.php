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
</head>
<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
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

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">
                    <!-- navigation menu -->
                    <li class="active"><a data-scroll href="#event-form">Event Form</a></li>
                    <li><a data-scroll href="#speakers">Speakers</a></li>              
                    <li><a data-scroll href="#schedule">Schedule</a></li>                  
                    <li><a data-scroll href="#partner">Partner</a></li>                  
                    <li><a data-scroll href="#faq">FAQ</a></li>
                    <li><a data-scroll href="#photos">Photos</a></li>
                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

    <header id="site-header" class="site-header valign-center"> 
        <div class="intro">
            <h2>25 April, 2015 / Townhall California</h2>
            <h1>Freelancer Conference 2015</h1>
            <p>First &amp; Largest Conference</p>
            <a class="btn btn-white" data-scroll href="#event-form">Create Event</a>
        </div>
    </header>

   <!-- Event Form Section (replaced About Us) -->
<section id="event-form" class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h3 class="section-title">Create New Event</h3>
                <p class="text-muted">Fill the details below to create your awesome event 🚀</p>
            </div>
        </div>
            
        <form action="/events" method="POST" id="event-create-form" class="shadow p-4 rounded bg-light">
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
        <option value="Workshop">Workshop</option>
        <option value="Seminar">Seminar</option>
        <option value="Conference">Conference</option>
        <option value="Webinar">Webinar</option>
        <option value="Competition">Competition</option>
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

                <div class="col-md-6">
                    <label class="form-label fw-bold">Venue</label>
                    <input type="text" class="form-control" name="venue" placeholder="Event Location" required>
                </div>

            </div>

            <div class="mt-5" style="text-align: left; padding-left: 15px;">
    <button type="submit" class="btn btn-primary btn-lg px-5 rounded-3 shadow-sm" 
        style="transition: all 0.3s ease;">
        Submit Event
    </button>
</div>

        </form>
    </div>
</section>
<!-- Event Form Section End -->

    <!-- baki sections as it is -->
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

    <!-- speakers, registration, schedule, partner, faq, photos, location, footer ... remain same -->
    <!-- (I did not touch anything else except About Us section replacement) -->

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

</body>
</html>
 