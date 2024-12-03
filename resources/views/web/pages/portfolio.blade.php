@section('title', 'Portfolio - Neocut')
@extends('web.layout.app')
@section('content')
<main class="w-100">

        <!-- Breacrumb  -->
        <section class="service py-3 w-100">
            <div class="d-flex justify-content-center align-item-center">
              <div class="ml-5 my-auto">
                <a href="#" class="breadcrumb_link">Home ></a>
                <a href="#" class="breadcrumb_link"> <span>portfolio</span></a>
              </div>
              <div class="mr-lg-3 ml-auto">
                <h1 class="text-uppercase">portfolio</h1>
              </div>
            </div>
          </section>
        <!-- Breacrumb  -->
        
        <section class="portfolio w-100 py-5">
          <!-- portfolio button groups  -->
            <div class="btngroup text-center py-2 mx-3">
                <button class="btn btn-outline-warning text-uppercase px-3 py-1" type="button">All</button>
                <button class="btn btn-outline-warning text-uppercase px-3 py-1" type="button">Popular</button>
                <button class="btn btn-outline-warning text-uppercase px-3 py-1" type="button">Massage</button>
                <button class="btn btn-outline-warning text-uppercase px-3 py-1" type="button">Women's Hair</button>
                <button class="btn btn-outline-warning text-uppercase px-3 py-1" type="button">Men's Hair</button>
                <button class="btn btn-outline-warning text-uppercase px-3 py-1" type="button">fashion</button>
            </div>

            <!-- images  -->

            <div class="row w-100 py-5 g-0 mx-auto">
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 p-0 m-0">
                    <img src="assets/images/portfolio/portfolio-img1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 p-0 m-0">
                    <img src="assets/images/portfolio/portfolio-img2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 p-0 m-0">
                    <img src="assets/images/portfolio/portfolio-img3.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 p-0 m-0">
                    <img src="assets/images/portfolio/portfolio-img4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 p-0 m-0">
                    <img src="assets/images/portfolio/portfolio-img5.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 p-0 m-0">
                    <img src="assets/images/portfolio/portfolio-img6.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="text-center btngroup py-5">
                <button class="btn btn-lg px-4 py-2">MORE</button>
            </div>

            <div class="container d-flex">
                
                <div class="d-flex m-auto g-3">
                  <!-- Diamond icon 1  -->
                    <div id="diamond">
                      <i class="fa-brands fa-google-plus-g"></i>
                    </div>
                  <!-- Diamond icon 2  -->
                    <div id="diamond">
                      <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                    </div>
                  <!-- Diamond icon 3  -->
                    <div id="diamond">
                      <i class="fa-brands fa-twitter"></i>
                    </div>
                  

                </div>

            </div>


        </section>

    </main>
@endsection   