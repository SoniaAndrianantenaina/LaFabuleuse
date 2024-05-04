@extends('layout.footer')
@section('content')
        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4 text-paillete">Réservation</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item" ><a href="{{ url ('/')}}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Réservation</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


              <!-- Events Start -->
        <div class="container-fluid event py-6" style="padding-top: 0 !important;">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.6s">
                    <small class="d-inline-block fw-bold text-white text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Catalogue de Soirées</small>
                    <h1 class="display-5 mb-5 text-paillete">Les soirées pris en charge</h1>
                </div>
                <div class="tab-class text-center">
                    
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets/img/formal-party.jpg')}}"   alt="">
                                                <div class="event-overlay d-flex flex-column p-4 typeChoice" style="cursor: pointer;" data-toggle="collapse" data-target="#bookingForm" aria-expanded="false" aria-controls="bookingForm">
                                                    <h2 class="me-auto" style="font-family: Playball, cursive !important"> Mondaine</h2>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="{{asset('assets/img/pro-party.jpg')}}" alt="" >
                                                <div class="event-overlay d-flex flex-column p-4 typeChoice" style="cursor: pointer;" data-toggle="collapse" data-target="#bookingForm" aria-expanded="false" aria-controls="bookingForm">
                                                    <h2 class="me-auto" tyle="font-family: Playball, cursive !important"> Professionnelle</h2>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Events End -->


        <!-- Book Us Start -->
        <div class="container-fluid contact py-6 "  id="bookingForm" style="padding-top:0 !important;" hidden>
            <div class="container">
                
                <div class="row g-0">
                    <div class="col-1">
                        <img src="{{asset('assets/img/wine1.jpg')}}" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                    <div class="col-10">
                        <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                            <div class="text-center">
                                
                                <h1 class="display-5 mb-5 text-paillete">Reserver nos services</h1>
                            </div>
                            <div class="row g-4 form">
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" disabled class="form-control border-primary p-2" placeholder="Soirée Mondaine">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Thème</option>
                                        <option value="1">Depend On Country</option>
                                        <option value="2">UK</option>
                                        <option value="3">India</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="date" class="form-control border-primary p-2" >
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-select border-primary p-2" aria-label="Default select example">
                                        <option selected>Lieu</option>
                                        <option value="1">Event Type</option>
                                        <option value="2">Big Event</option>
                                        <option value="3">Small Event</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control border-primary p-2" placeholder="Localisation">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                     <input type="number" class="form-control border-primary p-2" placeholder="Nbre de participants">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="number" class="form-control border-primary p-2" placeholder="Votre Budget">
                                </div>
                                <div class="col-lg-4 col-md-6">
                                   
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill" data-toggle="collapse" data-target="#bookingForm2" aria-expanded="false" aria-controls="bookingForm2" >Suivant</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <img src="{{asset('assets/img/wine2.jpg')}}" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid contact py-6 collapse"  id="bookingForm2" style="padding-top:0 !important;">
            <div class="container">
                
                <div class="row gx-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Us End -->

@endsection