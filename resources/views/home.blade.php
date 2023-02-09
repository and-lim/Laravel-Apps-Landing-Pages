@extends('layout')
    
@section('mainSection')
{{-- header --}}
<div class="pb-0 pt-3 bg-primary hero-header">
    <div class="container py-5 mt-5">
        <div class="row g-5 mt-lg-1 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 text-slider-items intro-title">Awesome Software To Manage Your Business</h1>
                <h1 class="text-white mb-4 text-slider intro-title"></h1>
                <p class="text-white animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd dolor sed magna dolor.</p>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 58px;">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-3 shadow-none position-absolute top-0 end-0 m-2">Try Now</button>
                </div>
            </div>
            <div class="col-lg-6 img-animate text-center text-lg-start">
                <div class="swiper pb-5 wow animate__animated animate__zoomIn" data-wow-delay="1s">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      <!-- Slides -->
                        <div class="swiper-slide d-flex align-items-center justify-content-center ">
                          <img class="img-fluid" src="../../img/laptop-1.png" alt=""/>
                        </div>
                         <div class="swiper-slide d-flex align-items-center justify-content-center">
                              <img class="img-fluid" src="../../img/laptop-2.png" alt=""/>
                            </div>
                            <div class="swiper-slide d-flex align-items-center justify-content-center">
                              <img class="img-fluid" src="../../img/laptop-3.png" alt=""/>
                            </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
          
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
          
                  
          
                </div>
            </div>
        </div>
        <div class="mouse-icon mouse-animate">    
            <svg width="19"height="30" viewBox="0 0 19 30" fill="none" xmlns="http://www.w3.org/2000/svg"	>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.875 20.625V9.375C16.875 7.38588 16.0848 5.47822 14.6783 4.0717C13.2718 2.66518 11.3641 1.875 9.375 1.875C7.38588 1.875 5.47822 2.66518 4.0717 4.0717C2.66518 5.47822 1.875 7.38588 1.875 9.375V20.625C1.875 22.6141 2.66518 24.5218 4.0717 25.9283C5.47822 27.3348 7.38588 28.125 9.375 28.125C11.3641 28.125 13.2718 27.3348 14.6783 25.9283C16.0848 24.5218 16.875 22.6141 16.875 20.625ZM9.375 0C6.8886 0 4.50403 0.98772 2.74587 2.74587C0.98772 4.50403 0 6.8886 0 9.375V20.625C0 23.1114 0.98772 25.496 2.74587 27.2541C4.50403 29.0123 6.8886 30 9.375 30C11.8614 30 14.246 29.0123 16.0041 27.2541C17.7623 25.496 18.75 23.1114 18.75 20.625V9.375C18.75 6.8886 17.7623 4.50403 16.0041 2.74587C14.246 0.98772 11.8614 0 9.375 0Z"
                fill="white"
                class="mouse"
              ></path>
              <path
                d="M10.0379 7.39959C9.8621 7.22377 9.62364 7.125 9.375 7.125C9.12636 7.125 8.8879 7.22377 8.71209 7.39959C8.53627 7.5754 8.4375 7.81386 8.4375 8.0625V11.8125C8.4375 12.0611 8.53627 12.2996 8.71209 12.4754C8.8879 12.6512 9.12636 12.75 9.375 12.75C9.62364 12.75 9.8621 12.6512 10.0379 12.4754C10.2137 12.2996 10.3125 12.0611 10.3125 11.8125V8.0625C10.3125 7.81386 10.2137 7.5754 10.0379 7.39959Z"
                fill="white"
                class="cursor"
              ></path>
            </svg>
         </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,288L1440,128L1440,320L0,320Z"></path></svg>
</div>
{{-- header --}}

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center wow zoomIn">
                <h1>Manage & Push Your Business To The Next Level</h1>
            </div>
            <div class="col-12 wow fadeInUp">
                <div class="owl-carousel item-carousel h-50">
                    <div class="item-item">
                        <img src="../../img/image-1.svg" alt="">
                    </div>
                    <div class="item-item">
                        <img src=".../../img/image-2.svg" alt="">
                    </div>
                    <div class="item-item">
                        <img src="../../img/image-3.svg" alt="">
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- Feature Start -->
        <section class=" my-1">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 wow animate__animated animate__slideInLeft" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-edit text-primary mb-4"></i>
                            <h5 class="mb-3">Fully Customizable</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow  animate__animated animate__slideInLeft" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-sync text-primary mb-4"></i>
                            <h5 class="mb-3">App Integration</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow  animate__animated animate__slideInLeft" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-draw-polygon text-primary mb-4"></i>
                            <h5 class="mb-3">Drag And Drop</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container d-lg-block d-none">
            <div class="position-absolute ">
                <img src="img/blob.svg" class="img-animasi" style="opacity: 0.1; margin-left:-30%; z-index: -1;" alt="">  
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
<section class="my-6 py-5">
        <div class="" id="about">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow  animate__animated animate__bounceInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-4">Manage & Push Your Business To The Next Level</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>First Working Process</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>24/7 Hours Support</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__rotateIn">
                        <img class="img-fluid rounded img-animate " src="img/computer.gif">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>

<section class="my-5 backup-section">
    <div class="container ">
        <div class="row">
            <div class="col-lg-4 col-12 wow rotateIn">
                <img class="img-animate img-fluid" src="img/image-3.svg" alt="">
            </div>
            <div class="col-lg-8 col-12">
            <div class="row align">
                <div class="col-md-6 mb-5">
                    <div class="test-card d-flex item-card wow fadeInRight border-orange">
                        <div class="icon me-3">
                          <i class="fa fa-3x fa-check"></i>
                        </div>
                        <div class="icon-info">
                            <h5>Data Backup </h5>
                            <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod
                                tempor init sit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="test-card d-flex item-card wow fadeInRight border-blue " data-wow-delay="0.5s">
                        <div class="icon me-3">
                          <i class="fa fa-3x fa-check"></i>
                        </div>
                        <div class="icon-info">
                            <h5>Data Backup </h5>
                            <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod
                                tempor init sit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="test-card d-flex item-card wow fadeInRight border-green" data-wow-delay="0.8s">
                            <div class="icon me-3">
                                <i class="fa fa-3x fa-check"></i>
                            </div>
                            <div class="icon-info">
                                <h5>Data Backup </h5>
                                <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod
                                    tempor init sit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5" >
                            <div class="test-card d-flex item-card wow fadeInRight border-black" data-wow-delay="1s">
                                <div class="icon me-3">
                                  <i class="fa fa-3x fa-check"></i>
                                </div>
                                <div class="icon-info">
                                    <h5>Data Backup </h5>
                                    <p> Lorem ipsum dolor sit amet, dolor elit, sed eiusmod
                                        tempor init sit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-lg-block d-none">
                <div class="position-absolute">
                    <img src="img/blob-2.svg" class="img-animasi" style="opacity: 0.1; margin-left: 70px; z-index: -1;" alt="">  
                </div>
            </div>
        </section>


        <!-- Overview Start -->
        <section class="bg-light my-6 py-5" id="overview">
            <div class="container">
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                        <img class="img-fluid rounded img-animate" style="height: 400px;" src="img/mobile-apps.gif">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">01</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Integration</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow wow animate__animated animate__bounceInLeft" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">02</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Customization</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid img-animate rounded" style="height: 450px;" src="img/dashboard.gif">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow animate__animated animate__backInDown" data-wow-delay="0.1s">
                        <img class="img-fluid img-animate rounded" src="img/apps.gif">
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__lightSpeedInLeft" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">03</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Modification</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Overview End -->
        
        <section class="phone-section">
            <div class="container d-lg-block d-none">
                <div class="position-absolute">
                    <img class="img-animasi" src="img/blob-2.svg" style="opacity: 0.1; margin-right: -120px; z-index: -1;" alt="">  
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 justify-content-center align-items-center col-12 wow fadeInLeftBig">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/pegaw.ai-1.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/pegaw.ai-2.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/pegaw.ai-3.png" alt="">
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item my-3 border-3 border-primary shadow-sm">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Accordion Item #1
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item mt-3 border-3 border-top border-primary">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Accordion Item #2
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item my-3 border-3 border-top border-dark">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Accordion Item #3
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item mt-3 border-3 border-top border-primary">
                                <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #4
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item mt-3 border-3 border-top border-primary">
                                <h2 class="accordion-header" id="headingFive">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #5
                                  </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Advanced Feature Start -->
        <div class="container-xxl py-6" id="features">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Advanced Features</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Fully Customizable</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">App Integration</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">High Resolution</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Drag And Drop</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advanced Feature End -->


        <!-- Facts Start -->
        <div class="container-xxl bg-primary my-6 py-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-cogs fa-3x text-white mb-3"></i>
                        <h1 class="mb-2 text-white" data-toggle="counter-up">7264</h1>
                        <p class="text-white mb-0">Active Install</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users fa-3x text-white mb-3"></i>
                        <h1 class="mb-2 text-white" data-toggle="counter-up">6521</h1>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2 text-white" data-toggle="counter-up">729</h1>
                        <p class="text-white mb-0">Award Wins</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-quote-left fa-3x text-white mb-3"></i>
                        <h1 class="mb-2 text-white" data-toggle="counter-up">5917</h1>
                        <p class="text-white mb-0">Clients Reviews</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Process Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow flipInX" data-wow-delay="0.1s">
                        <img class="img-fluid img-animate rounded" src="img/process.jpg">
                    </div>
                    <div class="col-lg-6 wow animate__animated animate__backInRight" data-wow-delay="0.5s">
                        <h1 class="mb-4">Three Simple Steps To Start Working With</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <ul class="process mb-0">
                            <li>
                                <span><i class="fa fa-cog"></i></span>
                                <div>
                                    <h5>Install the Software</h5>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-address-card"></i></span>
                                <div>
                                    <h5>Setup Your Profile</h5>
                                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-check"></i></span>
                                <div>
                                    <h5>Enjoy The Features</h5>
                                    <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End -->


        <!-- Pricing Start -->
        <div class="container-xxl py-6" id="pricing">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Pricing Plan</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-dark p-4 text-center">
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
                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-primary p-4 text-center">
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
                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <a href="" class="btn btn-primary rounded-pill py-2 px-4 mt-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow bounceInRight" data-wow-delay="0.8s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-dark p-4 text-center">
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
                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-check text-success pt-1"></i></div>
                                <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">What Our Clients Say</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>

                
                <div class="owl-carousel py-5 testimonial-carousel wow zoomIn" data-wow-delay="0.2s">
                    <div class="testimonial-card ">
                        <div class="card-head text-center bg-white pb-5">
                            <div class="icon text-center text-pegawai-darkblue ">
                                <i class="fa fa-comment fa-2x text-center mt-3"></i>
                            </div>
                            <p class="fs-6 px-2 my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo officia odio consequatur perspiciatis quaerat vel amet consectetur eligendi, accusantium sit, iure earum excepturi laborum voluptatum recusandae saepe itaque sint iste..</p>
                            <span class="line bg-primary text-center rounded-2 mx-auto d-block position-relative mb-3" style="width: 30px; height: 5px; "></span>
                        </div>  
                        <div class="d-flex flex-column card-profile bg-primary text-white justify-content-center align-items-center">   
                            <img class="img-fluid user-pic border border-3 border-warning rounded-circle" src="img/testimonial-1.jpg"  style="margin-top:-30px"  alt="" srcset="">
                            <div class=" text-center">
                                <h5 class="mb-1 fw-700 text-pegawai-orange">Client Name</h5>
                                 <i class="">Profession</i>
                              <div class="stars text-warning">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="card-head text-center bg-white pb-5">
                            <div class="icon text-center text-pegawai-darkblue ">
                                <i class="fa fa-comment fa-2x text-center mt-3"></i>
                            </div>
                            <p class="fs-6 px-2 my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo officia odio consequatur perspiciatis quaerat vel amet consectetur eligendi, accusantium sit, iure earum excepturi laborum voluptatum recusandae saepe itaque sint iste..</p>
                            <span class="line bg-primary text-center rounded-2 mx-auto d-block position-relative mb-3" style="width: 30px; height: 5px; "></span>
                        </div>  
                        <div class="d-flex flex-column card-profile bg-primary text-white justify-content-center align-items-center">   
                            <img class="img-fluid user-pic border border-3 border-warning rounded-circle" src="img/testimonial-1.jpg"  style="margin-top:-30px"  alt="" srcset="">
                            <div class=" text-center">
                                <h5 class="mb-1 fw-700 text-pegawai-orange">Client Name</h5>
                                 <i class="">Profession</i>
                              <div class="stars text-warning">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="card-head text-center bg-white pb-5">
                            <div class="icon text-center text-pegawai-darkblue ">
                                <i class="fa fa-comment fa-2x text-center mt-3"></i>
                            </div>
                            <p class="fs-6 px-2 my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo officia odio consequatur perspiciatis quaerat vel amet consectetur eligendi, accusantium sit, iure earum excepturi laborum voluptatum recusandae saepe itaque sint iste..</p>
                            <span class="line bg-primary text-center rounded-2 mx-auto d-block position-relative mb-3" style="width: 30px; height: 5px; "></span>
                        </div>  
                        <div class="d-flex flex-column card-profile bg-primary text-white justify-content-center align-items-center">   
                            <img class="img-fluid user-pic border border-3 border-warning rounded-circle" src="img/testimonial-1.jpg"  style="margin-top:-30px"  alt="" srcset="">
                            <div class=" text-center">
                                <h5 class="mb-1 fw-700 text-pegawai-orange">Client Name</h5>
                                 <i class="">Profession</i>
                              <div class="stars text-warning">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                              </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <section class="bg-primary py-6" id="contact">
            <div class="container"> 
                <div class="row g-5">
                    <div class="col-12">
                        <form class="contact">
                            <div class="contact-title d-flex flex-column justify-content-center align-items-center">
                                <h1 class="mb-3">Contact Us</h1>
                                <h5 class="mb-4">Please contact us for more information about the Product </h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 d-flex flex-column justify-content-center order-2 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="mx-auto text-center border border-2 rounded-3 border-dark p-3 mb-lg-4">
                                        <div class="d-flex align-content-center mb-4">
                                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div class="ms-5 pb-1 mb-3">
                                                <p class="mb-0">Call Us</p>
                                                <h5 class="mb-0">+012 345 6789</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4 align-items-center">
                                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="ms-5 pb-1 mb-3">
                                                <p class="mb-0">Mail Us</p>
                                                <h5 class="mb-0">info@example.com</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-0 align-items-center">
                                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                                <i class="fa fa-map-marker-alt"></i>
                                            </div>
                                            <div class="ms-3 pb-1 mb-3">
                                                <p class="mb-0">Our Office</p>
                                                <h5 class="mb-0 ms-3">123 Street, New York, USA</h5>
                                            </div>
                                        </div>
                                    </div>
          
                                </div>
                                <div class="col-lg-8 order-1 wow bounceInRight" data-wow-delay="0.5s">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                                    <label for="name">Your Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                                    <label for="email">Your Email</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                                    <label for="subject">Subject</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                                    <label for="message">Message</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                                            </div>
                                        </div>
                                </div>

                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->
        


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>



        
@endsection
