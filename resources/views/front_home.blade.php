<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('clinic-website') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('clinic-website') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('clinic-website') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('clinic-website') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('clinic-website') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('clinic-website') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('partials.top_navbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('partials.navbar')
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Good Health Is The Root Of All Heppiness</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                            <p class="text-light mb-0">Medical Stuff</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                            <p class="text-light mb-0">Total Patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{asset('clinic-website')}}/img/carousel-1.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Cardiology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{asset('clinic-website')}}/img/carousel-2.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Neurology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{asset('clinic-website')}}/img/carousel-3.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Pulmonary</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->


    <!-- Service Start -->
    @include('partials.service')
    <!-- Service End -->


    <!-- Feature Start -->
    @include('partials.feature')
    <!-- Feature End -->


    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->


    <!-- Appointment Start -->
    @include('partials.appointment')
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    @include('partials.testimonial')
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('clinic-website') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('clinic-website') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('clinic-website') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('clinic-website') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('clinic-website') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('clinic-website') }}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('clinic-website') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('clinic-website') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('clinic-website') }}/js/main.js"></script>
</body>

</html>
