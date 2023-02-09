@extends('layout')

    {{-- header --}}
    <div class="pb-0 pt-3 bg-primary hero-header">
        <div class="container py-5 mt-5">
            <div class="row g-5 mt-lg-2 mx-auto align-items-center">
                <div class="col-lg-6 mx-auto text-center text-lg-start">
                    <h1 class="text-white mb-4 text-center intro-title">Contact</h1>
                    <h3 class="text-warning text-center animated slideInDown mt-3">we offer a best price for best solution</h3>
    
                </div>
                {{-- <div class="col-lg-6 img-animate text-center text-lg-start">
  
                </div> --}}
            </div>
        </div>

    </div>

@section('mainSection')

<div class="container">
    <div class="text-center my-5">
        <h1 class="apps-text fw-bold mt-5">
         Want to Know Apps more?
        </h1>
    </div>
    <div class="row ">
        <div class="col-5 my-3 mx-auto">
            <div class="row my-5">
                <div class="col-8">
                    <h1 class="fw-bold"> Schedule a meeting now</h1>
                    <p>Consult your needs with our team and learn how Apps can be the right solution for your business</p>
                </div>
                <div class="col-4">
                    <img src="img/wa.svg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
            <form action="" class="contact-form p-3 border border-2 rounded-3">
                <div class="form-title text-center my-3 py-1">
                    <h3 class="text-primary">Please Fill this Form</h3>
                    <p class="text-dark fw-bold"> get the Apps easily</p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <div class="position-relative w-100 mt-1">
                    <i class="fa fa-user text-primary shadow-none position-absolute top-0 end-0 mt-1 me-2 fs-4"></i>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <div class="position-relative w-100 mt-1">
                        <i class="fa fa-envelope text-primary shadow-none position-absolute top-0 end-0 mt-1 me-2 fs-4"></i>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                     </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone </label>
                    <div class="position-relative w-100 mt-1">
                        <i class="fa fa-phone-alt text-primary shadow-none position-absolute top-0 end-0 mt-1 me-2 fs-4"></i>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="phone number">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Choose Plan</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Plans</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">City</label>
                    <div class="position-relative w-100 mt-1">
                        <i class="fa fa-city text-primary shadow-none position-absolute top-0 end-0 mt-1 me-2 fs-4"></i>
                        <input type="text" class="form-control " id="exampleFormControlInput1" placeholder="City">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Country</label>
                    <div class="position-relative w-100 mt-1">
                        <i class="fa fa-flag text-primary shadow-none position-absolute top-0 end-0 mt-1 me-2 fs-4"></i>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="country">
                    </div>
                  </div>
                  <div class="form-check ms-1 mt-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                    <label class="form-check-label fw-bold" for="flexCheckDefault">
                      By submitting this form you are agree with our terms and conditions
                    </label>
                  </div>
                  <a class="btn btn-warning mx-auto mt-5  p-2 d-flex align-items-center justify-content-center"style="width:39%;">
                      <h5 class="mb-0 mx-auto">Contact Us</h5>
                      <i class="fa fa-phone-alt fa-1x me-auto ms-0"></i>
                  </a>
            </form>
        </div>
    </div>
</div>