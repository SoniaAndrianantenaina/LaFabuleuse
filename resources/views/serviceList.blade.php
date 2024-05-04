<link href="{{ asset('assets/css/caroussel.css') }}" rel="stylesheet">
@extends('layout.footer')
@section('content')
    <!-- Book Us Start -->
    <div class="container-fluid contact py-1 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="carte-caroussel">
                <main>

                    <ul class='slider'>
                        <li class='item' style="background-image: url({{ asset('assets/img/bar_tender.jpg') }})">
                            <div class='content'>
                                <h2 class='title'>"Bar"</h2>
                                <p class='description'> Un barman peut être à votre disposition, pour ajouter un peu de peps
                                    à votre soirée. </p>

                            </div>
                        </li>
                        <li class='item' style="background-image: url({{ asset('assets/img/caterer.jpg') }})">
                            <div class='content'>
                                <h2 class='title'>"Un service traiteur"</h2>
                                <p class='description'>Ayez confiance en nous pour vos repas, cocktails, ou barbecue. Nos
                                    traiteurs hors pair ne vous decevront pas</p>

                            </div>
                        </li>
                        <li class='item' style="background-image: url({{ asset('assets/img/decoration.jpg') }})">
                            <div class='content'>
                                <h2 class='title'>"Une Décoration FABULOUS"</h2>
                                <p class='description'>Donnez du plaisir à vos yeux grâce à nos décorations FABULOUS !!!
                                    Nous respecterons votre thème, vous serez époustoufflé </p>

                            </div>
                        </li>
                        <li class='item' style="background-image: url({{ asset('assets/img/dj2.jpg') }})">
                            <div class='content'>
                                <h2 class='title'>"Animations Musique"</h2>
                                <p class='description'>
                                    Une fête sans musique est une fête incomplete. Avec notre service animation musique,
                                    vous avez le choix entre un orchestre ou un DJ pour vous ambiancer
                                </p>

                            </div>
                        </li>
                        <li class='item' style="background-image: url({{ asset('assets/img/bierePong.jpg') }})">
                            <div class='content'>
                                <h2 class='title'>"Animations jeux"</h2>
                                <p class='description'>
                                    Quoi de mieux pour renforcer votre équipe que des jeux de groupe. Nous pouvons vous
                                    organiser des petits jeux de groupe pour votre soirée.
                                </p>

                            </div>
                        </li>

                    </ul>
                    <nav class='nav'>
                        <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
                        <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
                    </nav>
                </main>
            </div>
        </div>
    </div>
    <!-- Book Us End -->
    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site
                            Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- partial -->
    <script src="{{ asset('assets/js/caroussel.js') }}"></script>
@endsection
