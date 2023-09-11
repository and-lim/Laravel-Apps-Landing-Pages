@extends('layout')

    {{-- header --}}
    <div class="pb-0 pt-3 bg-primary hero-header">
        <div class="container py-5 mt-5">
            <div class="row g-5 mt-lg-2 mx-auto align-items-center">
                <div class="col-lg-6 mx-auto text-center text-lg-start">
                    <h1 class="text-white mb-4 text-center intro-title">Pricing</h1>
                    <h3 class="text-warning text-center animated slideInDown mt-3">we offer a best price for best solution</h3>
    
                </div>
                {{-- <div class="col-lg-6 img-animate text-center text-lg-start">
  
                </div> --}}
            </div>
        </div>

    </div>

    @section('mainSection')
    <div class="container-xxl py-6" id="pricing">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Pricing Plan</h1>
                <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
            </div>
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-lg-4 col-md-6 wow bounceInLeft" data-wow-delay="0.1s">
                    <div class="price-item rounded overflow-hidden">
                        <div class="bg-dark card-header p-4 text-center">
                            <h4 class="text-white mt-2">Standard</h4>
                            <div class="text-white">
                                <span class="align-top fs-4 fw-bold">$</span>
                                <h1 class="d-inline display-6 text-primary mb-0"> 29.99</h1>
                                <span class="align-baseline">/ Month</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Wordpress</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="price-item rounded overflow-hidden">
                        <div class="card-header bg-primary p-4 text-center">
                            <h4 class="text-white mt-2">Professional</h4>
                            <div class="text-white">
                                <span class="align-top fs-4 fw-bold">$</span>
                                <h1 class="d-inline display-6 text-white mb-0"> 49.99</h1>
                                <span class="align-baseline">/ Month</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Angular Framework</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow bounceInRight" data-wow-delay="0.8s">
                    <div class="price-item rounded overflow-hidden">
                        <div class="card-header bg-dark p-4 text-center">
                            <h4 class="text-white mt-2">Ultimate</h4>
                            <div class="text-white">
                                <span class="align-top fs-4 fw-bold">$</span>
                                <h1 class="d-inline display-6 text-primary mb-0"> 79.99</h1>
                                <span class="align-baseline">/ Month</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>React Framework</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-check text-success pt-1"></i></div>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow bounceInRight" data-wow-delay="0.8s">
                    <div class="price-item rounded overflow-hidden">
                        <div class="card-header bg-dark p-4 text-center">
                            <h4 class="text-white mt-2">Ultimate</h4>
                            <div class="text-white">
                                <span class="align-top fs-4 fw-bold">$</span>
                                <h1 class="d-inline display-6 text-primary mb-0" style="text-decoration: line-through red ;"> 99.99</h1>
                            </div>
                            <div class="text-white">
                                <span class="align-top fs-4 fw-bold">$</span>
                                <h1 class="d-inline display-6 text-primary mb-0">90.00</h1>
                                <span class="align-baseline">/ Month</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Laravel Framework</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Databases</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>12 Months Free Support</span><i class="fa fa-check text-success pt-1"></i></div>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="0.8s">
                    <div class="price-item rounded-2 border border-primary border-3 overflow-hidden">
                        <div class="bg-warning p-2 text-center">
                            <h5 class="apps-text fw-bolder"> Best Offer !</h5>
                        </div>
                        <div class="card-header bg-dark p-4 text-center">
                            <h4 class="text-white mt-2">Ultimate</h4>
                            <div class="text-white">
                                <span class="align-top fs-4 fw-bold">$</span>
                                <h1 class="d-inline display-6 text-primary mb-0" style="text-decoration: line-through red ;"> 109.99</h1>
                            </div>
                            <div class="text-white">
                                <span class="align-top fs-4 fw-bold">$</span>
                                <h1 class="d-inline display-6 text-primary mb-0">100.00</h1>
                                <span class="align-baseline">/ Month</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Laravel Framework</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-check text-success pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Databases</span><i class="fa fa-check text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>18 Months Free Support</span><i class="fa fa-check text-success pt-1"></i></div>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

    @endsection