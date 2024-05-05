<link href="{{ asset('assets/css/caroussel.css') }}" rel="stylesheet">
@extends('layout.footer')
@section('content')
    <!-- Book Us Start -->
    <div class="container-fluid contact py-1 wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="carte-caroussel">
                <main>
                    <ul class='slider'>
                        @foreach ($services as $service)
                        <li class='item' style="background-image: url('{{ asset('assets/img/'.$service->image) }}');">
                            <div class='content'>
                                <h2 class='title'>"{{$service->nom}}"</h2>
                                <p class='description'>{{$service->description}}</p>

                            </div>
                        </li>
                        @endforeach
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
