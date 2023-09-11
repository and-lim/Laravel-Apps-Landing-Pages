<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Apps</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link href="../../img/favicon-32x32.png" rel="icon">

    <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&family=Roboto+Slab&display=swap" rel="stylesheet">

    <!-- Icon Font -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    

    <!-- Library  -->
    <link href="../../lib/owl/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css'); }} ">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css'); }} ">

    <!-- Custom Css -->
    <link href="{{ URL::asset('css/style.css'); }} " rel="stylesheet">
</head>

<body class="">

<!-- Navbar & Hero Start -->
            <nav class="navbar navbar-apps navbar-expand-lg navbar-light px-4 mb-lg-5 px-lg-5 py-2 py-lg-3 rounded-3">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">Apps</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
               
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-white ms-lg-3" id="navbarCollapse">
                    <div class="navbar-nav me-lg-auto ms-lg-0 py-0">
                        <a href="/" class="nav-item nav-link mx-lg-3">Home</a>
                        <a href="/about " class="nav-item nav-link mx-lg-3">About</a>
                        <a href="/price" class="nav-item nav-link mx-lg-3">Price</a>
                        <a href="/contact" class="nav-item nav-link mx-lg-3 d-lg-none">Contact</a>
                        <a href="" class="btn btn-warning rounded-1 py-1 px-2 ms-3 d-lg-none fw-bold">Free Trial</a>
                    </div>
                    <div class="navbar-nav ms-lg-auto me-lg-0 py-0">
                        <a href="/contact" class="nav-item nav-link mx-lg-3 d-none d-lg-block">Contact</a>
                        <img src="img/wa.svg" width="30" class="mx-2 d-none d-lg-block" alt="" srcset="">
                    </div>
                    <a href="" class="btn btn-warning rounded-1 py-2 px-4 ms-3 d-none d-lg-block fw-bold">Free Trial</a>
                </div>
            </nav>
        <!-- Navbar & Hero End -->

{{-- section --}}
<section>
    @yield('mainSection')
</section>
                <!-- Footer Start -->
                <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
                    <div class="container py-5 px-lg-5">
                        <div class="row g-5">
                            <div class="col-md-6 col-lg-3">
                                <p class="text-white h5 mb-4">Quick Link<span></span></p>
                                <a class="btn btn-link" href="/about">About</a>
                                <a class="btn btn-link" href="/contact">Contact</a>
                                <a class="btn btn-link" href="/policy">Privacy Policy</a>
                                <a class="btn btn-link" href="/terms">Terms & Conditions</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <p class="text-white h5 mb-4">Community<span></span></p>
                                <a class="btn btn-link" href="">Career</a>
                                <a class="btn btn-link" href="">Leadership</a>
                                <a class="btn btn-link" href="">Strategy</a>
                                <a class="btn btn-link" href="">History</a>
                                <a class="btn btn-link" href="">Components</a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <p class="text-white h5 mb-4">Newsletter<span></span></p>
                                <p class="text-white">Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                                <div class="position-relative w-100 mt-3">
                                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 text-warning">
                                <p class="text-warning h5 mb-4">Address<span></span></p>
                                <p><i class="fa fa-map-marker-alt me-3"></i>Abc Street, Jakarta, Indo </p>
                                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                                <div class="d-flex pt-2">
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="container px-lg-5">
                        <div class="copyright ">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 text-center text-warning mx-auto mb-3 mb-md-0">
                                    &copy; <a class="links" href="#">Apps Landing Page</a>, All Right Reserved. 
                                    Designed By <a class="border-bottom " href="https://and-lim.github.io/portofolio/">and-lim</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->

                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

                <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="lib/owl/owl.carousel.min.js"></script>
<script src="https://kit.fontawesome.com/6d5647a785.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
               
                <!-- Template Javascript -->
<script src="{{ URL::asset('js/main.js'); }} "></script>
<script src="{{ URL::asset('js/vanilla-tilt.min.js'); }}"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        // direction: 'vertical',   
        loop: true,

        // autoplay
        autoplay: {
        delay: 1000,
        disableOnInteraction: false,
        },
        
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        // scrollbar: {
        // 	el: '.swiper-scrollbar',
        // },
    });

</script>
                
            
<script>
        $(".testimonial-carousel").owlCarousel({
            stagePadding: 50,
    autoplay: true,
    smartSpeed: 1000,
    margin: 25,
    dots: true,
    loop: true,
    nav : true,
    navText : [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>'
    ],
    responsive: {
        0:{
            items:1
        },
        992:{
            items:2
            
        }
    }
    });

    $('.item-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    nav:false,
    // navText:[
    // '<i class="bi bi-chevron-left"></i>',
    //  '<i class="bi bi-chevron-right"></i>'
    // ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    });
</script>
            
            
<script>
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });
  </script>

<script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav:true,
        navText:[
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>'
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

</script>
<script>
    if ($(".text-slider").length == 1) {
        
        var typed_strings =
            $(".text-slider-items").text();

        var typed = new Typed(".text-slider", {
            strings: typed_strings.split(", "),
            typeSpeed: 50,
            loop: true,
            backDelay: 900,
            backSpeed: 30,
        });
    }
</script>

<script>
    VanillaTilt.init(document.querySelectorAll(".price-item, .test-card , .feature-item, .testimonial-card"),{
      glare: true,
      reverse: true,
      transition: true,
      "max-glare": 0.5
    });
  </script>
                    
</body>            
</html>