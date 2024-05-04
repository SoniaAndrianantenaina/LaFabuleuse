@extends('layout.footer')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-blue py-6 my-6 mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4 text-paillete">Réservation</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
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
                <small
                    class="d-inline-block fw-bold text-white text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Catalogue
                    de Soirées</small>
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
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('assets/img/formal-party.jpg') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4 typeChoice"
                                                style="cursor: pointer;" data-toggle="collapse" data-target="#bookingForm"
                                                aria-expanded="false" aria-controls="bookingForm">
                                                <h2 class="me-auto" style="font-family: Playball, cursive !important">
                                                    Mondaine</h2>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.3s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('assets/img/pro-party.jpg') }}" alt="">
                                            <div class="event-overlay d-flex flex-column p-4 typeChoice"
                                                style="cursor: pointer;" data-toggle="collapse" data-target="#bookingForm"
                                                aria-expanded="false" aria-controls="bookingForm">
                                                <h2 class="me-auto" tyle="font-family: Playball, cursive !important">
                                                    Professionnelle</h2>

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
    <div class="container-fluid contact py-6 " id="bookingForm" style="padding-top:0 !important;" hidden>
        <div class="container">

            <div class="row g-0">
                <div class="col-1">
                    <img src="{{ asset('assets/img/wine1.jpg') }}" class="img-fluid h-100 w-100 rounded-start"
                        style="object-fit: cover; opacity: 0.7;" alt="">
                </div>
                <div class="col-10">
                    <div class="border-bottom border-top border-primary bg-blue py-5 px-4">
                        <div class="text-center">

                            <h1 class="display-5 mb-5 text-paillete">Réserver nos services</h1>
                        </div>
                        <div class="row g-4 form">
                            <div class="col-lg-4 col-md-6">
                                <input type="text" disabled class="form-control border-primary p-2"
                                    placeholder="Soirée Mondaine">
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
                                <input type="date" class="form-control border-primary p-2">
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
                                <input type="number" class="form-control border-primary p-2"
                                    placeholder="Nbre de participants">
                            </div>
                            <div class="col-lg-4 col-md-6">

                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="number" class="form-control border-primary p-2" placeholder="Votre Budget">
                            </div>
                            <div class="col-lg-4 col-md-6">

                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill"
                                    data-toggle="collapse" data-target="#bookingForm2" aria-expanded="false"
                                    aria-controls="bookingForm2">Suivant</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/wine2.jpg') }}" class="img-fluid h-100 w-100 rounded-end"
                        style="object-fit: cover; opacity: 0.7;" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid contact py-6 collapse" id="bookingForm2" style="padding-top:0 !important;">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.6s">
                <small
                    class="d-inline-block fw-bold text-white text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Services</small>
                <h1 class="display-5 mb-5 text-paillete">Sélectionnez les options de service souhaitées</h1>
            </div>
            <div class="row gx-4 justify-content-center">
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/decoration.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fas fa-leaf" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a class="h5 lh-base my-auto h-100 p-3 text-paillete">DECORATION</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/buffet.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fa fa-utensils" aria-hidden="true"></i>

                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3 text-paillete">TRAITEUR</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/dj2.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fas fa-music" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3 text-paillete">ANIMATION</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-4 justify-content-center">
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/jeu.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fa fa-chess-queen" aria-hidden="true"></i>

                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3 text-paillete">JEUX</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/lieu.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fas fa-map-marker" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3 text-paillete">LIEU</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/bar_tender.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fas fa-wine-glass" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a href="#" class="h5 lh-base my-auto h-100 p-3 text-paillete">BAR</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill"
                    id="ConfirmBooking">Envoyer</button>
            </div>
        </div>
    </div>
    <!-- Book Us End -->

    {{-- Modal start --}}
    <div class="modal fade" id="ModalService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-paillete" id="exampleModalLongTitle">Choix de Décoration</h5>
                    <span aria-hidden="true"><i class="fa fa-x" data-dismiss="modal" aria-label="Close"
                            aria-hidden="true"></i></span>
                </div>
                <div class="modal-body">
                    <div class="Modal_holder">
                        <table width="100%">
                            <tr class="Modal_tr">
                                <td class="Modal_td">Include me in the public list</td>
                                <td class="Modal_td">
                                    <div>
                                        <input class="Modal_input" type="checkbox" />
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="Modal_tr">
                                <td colspan="2">
                                    <ul>
                                        <li>Option 1</li>
                                        <li>Option 2</li>
                                        <li>Option 3</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="Modal_tr">
                                <td class="Modal_td">Let my friends see my phone number</td>
                                <td class="Modal_td">
                                    <div>
                                        <input class="Modal_input" type="checkbox" />
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="Modal_tr">
                                <td colspan="2">
                                    <ul>
                                        <li>Option 1</li>
                                        <li>Option 2</li>
                                        <li>Option 3</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="Modal_tr">
                                <td class="Modal_td">Let my friends see my email address</td>
                                <td class="Modal_td">
                                    <div>
                                        <input class="Modal_input" type="checkbox" checked="" />
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="Modal_tr">
                                <td colspan="2">
                                    <ul>
                                        <li>Option 1</li>
                                        <li>Option 2</li>
                                        <li>Option 3</li>
                                    </ul>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" id="closeButton" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveButton">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="ModalInvitation" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-paillete" id="exampleModalLongTitle">Invitation</h5>
                    <span aria-hidden="true"><i class="fa fa-x" data-dismiss="modal" aria-label="Close"
                            aria-hidden="true"></i></span>
                </div>
                <div class="modal-body">
                    <div class="Modal_holder">
                        <h3>Voulez-vous qu'on s'occupe de l'invitation?</h3>
                        <div class="row">
                            <div style="display: inline-block;">
                                <p>
                                    <input class="Modal_input" type="checkbox" checked="" />
                                    <span class="text-paillette">OUI</span>
                                </p>

                            </div>

                            <div style="display: inline-block;">
                                <p>
                                    <input class="Modal_input" type="checkbox" checked="" />
                                    <span class="text-paillette">NON</span>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="saveButton">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
