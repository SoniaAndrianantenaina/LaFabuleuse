@extends('layout.footer')
@section('content')
    <div class="ctn-video">
        <video width="100%" loop preload="auto" autoplay="true" muted>
            <source src="{{ asset('assets/video/header-video.mp4') }}" type="video/mp4">
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>
    </div>

    <!-- About Satrt -->
    <div class="container-fluid py-6 pb-5" id="about_us">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-light text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Nos
                    types de soirées</small>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/soiree-mondaine.jpg') }}" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <h1 class="display-5 mb-4 text-paillete">Soirées mondaines </h1>
                    <p class="mb-4">Une soirée mondaine est un événement social élégant et sophistiqué, souvent organisé
                        dans des lieux prestigieux comme des hôtels de luxe, des galeries d'art ou des demeures somptueuses.
                        Ces soirées sont généralement fréquentées par des personnes de la haute société, des célébrités, des
                        personnalités influentes et des membres de la classe aisée. </p>
                    <a href="{{ url('/liste-des-services') }}" target="_blank"
                        class="btn btn-primary py-3 px-5 rounded-pill">Plus<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>

            <div class="row g-5 align-items-center mt-100">
                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                    <h1 class="display-5 mb-4 text-paillete">Soirées professionnelles </h1>
                    <p class="mb-4">Une soirée professionnelle est un événement organisé dans un cadre professionnel,
                        visant à favoriser le réseautage, le renforcement des relations d'affaires et parfois à célébrer des
                        succès ou des partenariats. Elle réunit généralement des collègues, des partenaires commerciaux, des
                        clients ou des investisseurs, offrant un cadre formel ou semi-formel propice aux échanges, aux
                        présentations professionnelles et aux activités de networking. </p>
                    <a href="{{ url('/liste-des-services') }}" target="_blank"
                        class="btn btn-primary py-3 px-5 rounded-pill">Plus<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/soiree-pro.jpg') }}" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    {{-- Liste services --}}
    <div class="container-fluid event py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-light text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Services</small>
                <h1 class="display-5 mb-5 text-paillete">Tous les services que nous proposons</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                            href="#tab-1">
                            <span class="text-light" style="width: 150px;">Tout</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-light" style="width: 150px;">Traiteur</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-light" style="width: 150px;">Animation</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-4">
                            <span class="text-light" style="width: 150px;">Décoration</span>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-5">
                            <span class="text-light" style="width: 150px;">Buffet</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/buffet.jpg" alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Traiteur</h4>
                                                <a href="img/event-1.jpg" data-lightbox="event-1" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/dance.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Animation</h4>
                                                <a href="img/event-2.jpg" data-lightbox="event-2" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/deco.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Décoration</h4>
                                                <a href="img/event-3.jpg" data-lightbox="event-3" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/boat.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Lieu</h4>
                                                <a href="img/event-4.jpg" data-lightbox="event-4" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/buffet2.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Traiteur</h4>
                                                <a href="img/event-1.jpg" data-lightbox="event-1" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/dance2.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Animation</h4>
                                                <a href="img/event-2.jpg" data-lightbox="event-2" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/deco2.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Décoration</h4>
                                                <a href="img/event-3.jpg" data-lightbox="event-3" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/lieu2.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Lieu</h4>
                                                <a href="img/event-4.jpg" data-lightbox="event-4" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/buffet.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Traiteur</h4>
                                                <a href="img/01.jpg" data-lightbox="event-8" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/buffet2.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Traiteur</h4>
                                                <a href="img/01.jpg" data-lightbox="event-9" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/dance.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Animation</h4>
                                                <a href="img/01.jpg" data-lightbox="event-10" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/dance2.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Animation</h4>
                                                <a href="img/01.jpg" data-lightbox="event-11" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/deco.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Décoration</h4>
                                                <a href="img/01.jpg" data-lightbox="event-12" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/deco2.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Décoration</h4>
                                                <a href="img/01.jpg" data-lightbox="event-13" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/boat.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Lieu</h4>
                                                <a href="img/01.jpg" data-lightbox="event-14" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/lieu2.jpg"
                                                alt="">
                                            <div class="event-overlay d-flex flex-column p-4">
                                                <h4 class="me-auto">Lieu</h4>
                                                <a href="img/01.jpg" data-lightbox="event-15" class="my-auto"><i
                                                        class="fas fa-search-plus text-dark fa-2x"></i></a>
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
    {{-- Fin liste services --}}

    {{-- Avis --}}
    <div class="container-fluid py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" id="testimonial" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Témoignages</small>
                <h1 class="display-5 mb-5 text-paillete">Découvrez les retours des clients !</h1>
            </div>
            <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp"
                data-wow-delay="0.1s">
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="assets/img/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0"
                            alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px; color:rgb(231, 228, 228)">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Jean-Luc</h4>
                            <p class="m-0">Comptable</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 fs-16">Ce site d'événementiel m'a vraiment impressionné. Leur équipe est
                            super
                            pro et réactive, ils ont géré mon événement de A à Z avec un souci du détail incroyable. </p>
                    </div>
                </div>
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0"
                            alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px; color:rgb(231, 228, 228)">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Savannah</h4>
                            <p class="m-0">Styliste</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 fs-16">Je suis ravi d'avoir choisi ce site d'événementiel pour organiser
                            mon dernier événement. Leur équipe a fait preuve d'un professionnalisme exemplaire. </p>
                    </div>
                </div>
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="assets/img/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0"
                            alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px; color:rgb(231, 228, 228)">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Nathalie</h4>
                            <p class="m-0">Professeure</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 fs-16">Ce site d'événementiel m'a vraiment impressionné. Leur équipe est
                            super
                            pro et réactive, ils ont géré mon événement de A à Z avec un souci du détail incroyable. </p>
                    </div>
                </div>
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="assets/img/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0"
                            alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px; color:rgb(231, 228, 228)">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Martin</h4>
                            <p class="m-0">Développeur</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 fs-16">Ce site d'événementiel est tout simplement exceptionnel. Leur
                            expertise et leur attention aux détails ont fait de mon événement un moment inoubliable. J'ai
                            adoré </p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel testimonial-carousel testimonial-carousel-2 wow bounceInUp" data-wow-delay="0.3s">
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="assets/img/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0"
                            alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px; color:rgb(231, 228, 228)">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Quentin</h4>
                            <p class="m-0">Commerciale</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 fs-16">Je suis enchanté par l'expérience que j'ai eue avec ce site
                            d'événementiel. Leur équipe a su transformer mes idées en réalité et créer une atmosphère
                            vraiment magique. </p>
                    </div>
                </div>
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0"
                            alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px; color:rgb(231, 228, 228)">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Gabrielle</h4>
                            <p class="m-0">Vendeuse</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 fs-16">Ce site d'événementiel m'a vraiment impressionné. Leur équipe est
                            super
                            pro et réactive, ils ont géré mon événement de A à Z avec un souci du détail incroyable. </p>
                    </div>
                </div>
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="assets/img/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0"
                            alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px; color:rgb(231, 228, 228)">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Karine</h4>
                            <p class="m-0">RH</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 fs-16">Je suis ravi d'avoir choisi ce site d'événementiel pour organiser
                            mon dernier événement. Leur équipe a fait preuve d'un professionnalisme exemplaire. </p>
                    </div>
                </div>
                <div class="testimonial-item rounded bg-light">
                    <div class="d-flex mb-3">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0"
                            alt="">
                        <div class="position-absolute" style="top: 15px; right: 20px; color:rgb(231, 228, 228)">
                            <i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="ps-3 my-auto">
                            <h4 class="mb-0">Sonia</h4>
                            <p class="m-0">Comptable</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3 fs-16">Je suis enchanté par l'expérience que j'ai eue avec ce site
                            d'événementiel. Leur équipe a su transformer mes idées en réalité et créer une atmosphère
                            vraiment magique. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin avis --}}

    <!-- Team Start -->
    <div class="container-fluid team py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" id="team" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Team</small>
                <h1 class="display-5 mb-5 text-paillete">Nos fabulous coéquipières</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid rounded-top " src="assets/img/team/Mihoby.jpg" alt="">
                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                            <h4 class="text-primary">Mihoby</h4>
                            <p class="text-white mb-0">Capitaine</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid rounded-top " src="assets/img/team/Anja.jpg" alt="">
                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                            <h4 class="text-primary">Anja</h4>
                            <p class="text-white mb-0">Equipière</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid rounded-top " src="assets/img/team/Sonia.jpg" alt="">
                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                            <h4 class="text-primary">Sonia</h4>
                            <p class="text-white mb-0">Equipière</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        <img class="img-fluid rounded-top " src="assets/img/team/Maphie.jpg" alt="">
                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                            <h4 class="text-primary">Maphie</h4>
                            <p class="text-white mb-0">Equipière</p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    {{-- Partenaires --}}
    <div class="container-fluid py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small
                    class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Partenaires</small>
                <h1 class="display-5 mb-5 text-paillete">Nos incroyables partenaires!</h1>
            </div>

            <div class="gallery">
                <span style="--i:1">
                    <img src="assets/img/partenaires/bocasay.jpg" alt="" />
                </span>
                <span style="--i:2">
                    <img src="assets/img/partenaires/etech.png" alt="" />
                </span>
                <span style="--i:3">
                    <img src="assets/img/partenaires/pulse-msg.png" alt="" />
                </span>
                <span style="--i:4">
                    <img src="assets/img/partenaires/vivetic.png" alt="" />
                </span>
                <span style="--i:5">
                    <img src='assets/img/partenaires/novity.png' alt="" />
                </span>
                <span style="--i:6">
                    <img src="assets/img/partenaires/mndpt.png" alt="" />
                </span>
                <span style="--i:7">
                    <img src="assets/img/partenaires/telma.png" alt="" />
                </span>
                <span style="--i:8">
                    <img src="assets/img/partenaires/hodi.png" alt="" />
                </span>
            </div>
        </div>
    </div>
    {{-- Fin Partenaires --}}
@endsection
