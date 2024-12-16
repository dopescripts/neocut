<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Neocut')</title>
    <!-- Custom css cdn link -->
    <link rel="stylesheet" href=" {{ asset('assets/css/styles.css') }} ">
    <!-- Bootstrap Cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Aos Libarary Cdn -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap 4 cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google font cdn  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="admin/assets/css/demo.css"> --}}
    {{-- <link rel="stylesheet" href="admin/assets/vendor/css/theme-default.css"> --}}
    {{-- <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />     --}}
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navbar  -->
    <header>
        <nav class="navbar navbar-expand-lg border-bottom border-body w-100" data-bs-theme="dark" style="background-color: rgb(44, 42, 48);">
            <div class="container-fluid py-3 px-5">
                <a class="navbar-brand" href="{{Route('home')}}">
                    <img src=" {{ asset('assets/images/logo.png') }} " alt="" class="img-fluid ms-md-5 ps-md-5">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end pl-lg-5" id="navbarNav">
                    <ul class="navbar-nav pl-lg-4">
                        <li class="nav-item px-lg-2">
                            <a class="nav-link actives" aria-current="page" href="{{Route('home')}}">HOME</a>
                        </li>
                        <li class="nav-item px-lg-2">
                            <a class="nav-link" href="{{ Route('services')}}">SERVICES</a>
                        </li>
                        <!-- Dropdown lists  -->
                        <li class="nav-item dropdown px-lg-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                WORK
                            </a>
                            <ul class="dropdown-menu rounded py-0 pt-2 mt-2" style="border-top: 2px rgb(221, 221, 36) solid;">
                                <li><a class="dropdown-item pb-2" href="{{ Route('portfolio')}}">Portfolio</a></li>
                                <li><a class="dropdown-item pb-2" href="portfolio.html">Portfolio-details</a></li>
                                <li><a class="dropdown-item pb-2" href="portfolio.html">Portfolio with LHS</a></li>
                            </ul>
                        </li>
                        <!-- Dropdown lists  -->
                        <li class="nav-item dropdown px-lg-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                BLOG
                            </a>
                            <ul class="dropdown-menu rounded py-0 pt-2 mt-2" style="border-top: 2px rgb(221, 221, 36) solid;">
                                <li><a class="dropdown-item pb-2" href="blog.html">Blog</a></li>
                                <li><a class="dropdown-item pb-2" href="blog-with-lhs.html">Blog with LHS</a></li>
                                <li><a class="dropdown-item pb-2" href="blog-with-lhs.html">Blog with RHS</a></li>
                            </ul>
                        </li>
                        <!-- Dropdown lists  -->
                        <li class="nav-item dropdown px-lg-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PAGES
                            </a>
                            <ul class="dropdown-menu rounded py-0 pt-2 mt-2" style="border-top: 2px rgb(221, 221, 36) solid;">
                                <li><a class="dropdown-item pb-2" href="about-us.html">About us</a></li>
                                <li><a class="dropdown-item pb-2" href="/services.html#faq">Faqs</a></li>
                                <li><a class="dropdown-item pb-2" href="#">Features</a></li>
                                <li><a class="dropdown-item pb-2" href="#">404</a></li>
                            </ul>
                        </li>
                        <!-- Dropdown lists  -->
                        <li class="nav-item px-lg-2">
                            <a class="nav-link" href="contact.html">CONTACT</a>
                        </li>
                    </ul>
                    <!-- Button  -->
                    <a class="btn btn-md ml-auto text-dark" href="#appointment">Make an appointment</a>
                    <div class="hexgonnavt d-none d-lg-block">
                        <div class="hexagonnav">
                            <span><i class="fa-solid fa-scissors"></i></span>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar  -->

    @yield('content')

    <footer class="py-5 px-5 pb-3">

        <div class="row justify-content-center px-5 mx-lg-5">

            <!-- Column 1  -->
            <div class="col-sm-12 col-md-6 col-lg-3 col-12 p-2 pt-5">
                <h3 class="pb-4 fw-normal">CONTACT US</h3>
                <i class="fa fa-envelope mr-2" aria-hidden="true"></i><a href="#">admin@mail.com</a><br>
                <i class="fa fa-phone mt-3 mr-2" aria-hidden="true"></i><a href="#">(01) 123 456 7890</a>
                <p class="text-secondary pt-4 ml-1">1235, Building name, <br>
                    Busy Commercial Street, Big City, <br>
                    Ny - 4215</p>
            </div>
            <!-- Column 1  -->
            <div class="col-sm-12 col-md-6 col-lg-3 col-12 p-2 pt-5">
                <h3 class="pb-4 fw-normal text-uppercase">Our Best Service</h3>
                <ul>
                    <li><a href="#">Hair Cutting</a></li>
                    <li><a href="#">Hair Styling</a></li>
                    <li><a href="#">Detan and Bleach</a></li>
                    <li><a href="#">Facials</a></li>
                    <li><a href="#">Hair Colouring</a></li>
                </ul>
            </div>
            <!-- Column 1  -->
            <div class="col-sm-12 col-md-6 col-lg-3 col-12 p-2 pt-5">
                <h3 class="pb-4 fw-normal text-uppercase">PRODUCTS WE USE</h3>
                <ul>
                    <li><a href="#">Shampoo</a></li>
                    <li><a href="#">Conditioner</a></li>
                    <li><a href="#">Treatment</a></li>
                    <li><a href="#">Styling Products</a></li>
                    <li><a href="#">Brushes and Combs</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 col-12 p-2 pt-5">
                <h3 class="pb-4 fw-normal text-uppercase">other information</h3>
                <ul>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Special Vouchers</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#"> Speacialists in Shop</a></li>
                    <li><a href="#">Special Services</a></li>
                </ul>
                <a href="#" class="pl-0 ml-0"><img src="assets/images/Home/appstore-google.png" alt="" class="img-fluid"></a>
                <a href="#"><img src="assets/images/Home/appstore.png" alt="" class="img-fluid"></a>
            </div>

        </div>

        <div class="container pt-3 text-center">
            <hr class="bg-secondary mx-2">
            <small class="justify-content-center">
                <span>Top Category:</span>
                <ul>
                    <li><a href="#">Services</a></li>|
                    <li><a href="#">Products</a></li>|
                    <li><a href="#">Spealists</a></li>|
                    <li><a href="#">Offers</a></li>
                </ul>

            </small>
            <hr class="bg-secondary mx-2">
            <p class="text-secondary">© 2015 NEOCUT. All Rights Reserved by <span class="fw-bold">Buddha Themes</span></p>
        </div>

    </footer>

    <!-- JS -->
    <!-- Boostrap javascript Cdn    -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Separat Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 java -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Aos Cdn -->
    <script>
        AOS.init();
    </script>

    <script>
        const slides = document.querySelectorAll('.slide');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % 3;
            showSlide(currentIndex);
        }

        setInterval(nextSlide, 2000);
    </script>
</body>

</html>