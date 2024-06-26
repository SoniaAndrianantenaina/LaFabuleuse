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
                    class="d-inline-block fw-bold text-white text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"
                    style="background-color:#0f2949 !important;">Catalogue
                    de Soirées</small>
                <h1 class="display-5 mb-5 text-paillete">Les soirées prises en charge</h1>
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
                                            <div class="event-overlay d-flex flex-column p-4 typeChoice" id="1"
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
                                            <div class="event-overlay d-flex flex-column p-4 typeChoice" id="2"
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
                                    @foreach ($themes as $theme)
                                        <option value="{{ $theme->id }}">{{ $theme->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="date" class="form-control border-primary p-2">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" aria-label="Default select example">
                                    <option selected>Lieu</option>
                                    @foreach ($lieux as $lieu)
                                        <option value="{{ $lieu->id }}">{{ $lieu->nom }}</option>
                                    @endforeach
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
                                <button type="submit" id="Suivant" class="btn btn-primary px-5 py-3 rounded-pill"
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
                    class="d-inline-block fw-bold text-white text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"
                    style="background-color:#0f2949 !important;">Services</small>
                <h1 class="display-5 mb-5 text-paillete">Sélectionnez les options de service souhaitées</h1>
            </div>
            <div class="row gx-4 justify-content-center">
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/decoration.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle"
                            style="background-color:#0f2949 !important;">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fas fa-leaf" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a class="h5 lh-base my-auto h-100 p-3 text-paillete"
                                href="{{ url('modal', ['id' => 2]) }}">DECORATION</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/buffet.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle"
                            style="background-color:#0f2949 !important;">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fa fa-utensils" aria-hidden="true"></i>

                                </div>
                            </div>
                            <a class="h5 lh-base my-auto h-100 p-3 text-paillete"
                                href="{{ url('modal', ['id' => 1]) }}">TRAITEUR</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/dj2.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle"
                            style="background-color:#0f2949 !important;">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fas fa-music" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a class="h5 lh-base my-auto h-100 p-3 text-paillete"
                                href="{{ url('modal', ['id' => 3]) }}">ANIMATION</a>
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
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle"
                            style="background-color:#0f2949 !important;">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fa fa-chess-queen" aria-hidden="true"></i>

                                </div>
                            </div>
                            <a class="h5 lh-base my-auto h-100 p-3 text-paillete"
                                href="{{ url('modal', ['id' => 4]) }}">JEUX</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/lieu.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle"
                            style="background-color:#0f2949 !important;">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fas fa-map-marker" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a class="h5 lh-base my-auto h-100 p-3 text-paillete"
                                href="{{ url('modal', ['id' => 7]) }}">INVITATION</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden rounded">
                            <img src="{{ asset('assets/img/bar_tender.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-content mx-4 d-flex rounded bg-light serviceTitle"
                            style="background-color:#0f2949 !important;">
                            <div class="text-dark bg-primary rounded-start">
                                <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                    <i class="fas fa-wine-glass" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a class="h5 lh-base my-auto h-100 p-3 text-paillete"
                                href="{{ url('modal', ['id' => 5]) }}">BAR</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center">
                <a href="{{ route('envoyerMail') }}">
                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill"
                        id="ConfirmBooking">Envoyer</button>
                </a>
            </div>
        </div>
    </div>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: '{{ session('success') }}',
            });
        @endif

        document.addEventListener('DOMContentLoaded', function() {
            console.log('hey');
            console.log(localStorage.getItem('idtype'));
            if (localStorage.getItem('idtype')) {
                // if (typeChoice.id == localStorage.getItem('idtype')) {
                    console.log('coucou');
                    var reserve = document.getElementById(localStorage.getItem('idtype'));
                    reserve.style.position = 'absolute';
                    reserve.style.width = '100%';
                    reserve.style.height = '100%';
                    reserve.style.top = '0';
                    reserve.style.left = '0';
                    reserve.style.background = 'rgba(212, 167, 98, 0.7)';
                    reserve.style.borderRadius = '8px';
                    reserve.style.opacity = '1';
                    reserve.style.zIndex = '1';

                    var checkIcon = document.createElement('i');
                    checkIcon.classList.add('fas', 'fa-check', 'text-white', 'fa-2x');
                    checkIcon.style.fontSize = '6rem';
                    reserve.style.textAlign = 'center';
                    checkIcon.style.marginTop = '4rem';
                    reserve.appendChild(checkIcon);

                    var bookingForm = document.getElementById('bookingForm');
                    bookingForm.classList.add('animate__animated', 'animate__bounceInUp');
                    bookingForm.hidden = false;

                    $(document).ready(function() {
                        $('#Suivant').click();
                    });
                // /}
            }
        });




    </script>
    <!-- Book Us End -->
@endsection
