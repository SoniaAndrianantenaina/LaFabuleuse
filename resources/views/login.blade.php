<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>La Fabulous | Login, Inscription</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

</head>

<body>
    <div class="bubble-container" id="bubble-container"></div>
    <audio id="pop-sound" preload="auto">
        <source src="https://cdn.pixabay.com/audio/2024/01/11/audio_e374973afd.mp3" type="audio/mpeg">
    </audio>

    <div id="bg">
        <canvas></canvas>
        <canvas></canvas>
        <canvas></canvas>
        <section class="user">
            <div class="user_options-container">
                <div class="user_options-text">
                    <div class="user_options-unregistered">
                        <h2 class="user_unregistered-title">Pas de compte ?</h2>
                        <p class="user_unregistered-text">Inscrivez-vous dès maintenant pour profiter de tous nos
                            services.
                        </p>
                        <button class="user_unregistered-signup" id="signup-button">S'inscrire</button>
                    </div>

                    <div class="user_options-registered">
                        <h2 class="user_registered-title">Vous avez déjà un compte ?</h2>
                        <p class="user_registered-text">Connectez-vous pour accéder à tous nos services exclusifs.</p>
                        <button class="user_registered-login" id="login-button">Connexion</button>
                    </div>
                </div>

                <div class="user_options-forms" id="user_options-forms">
                    <div class="user_forms-login">
                        <h2 class="forms_title">Login</h2>
                        <form class="forms_form" method="POST" action="{{ route('connectUser') }}">
                            @csrf
                            <fieldset class="forms_fieldset">
                                <div class="forms_field">
                                    <input type="email" placeholder="Email" name="email" class="forms_field-input"
                                        required autofocus />
                                </div>
                                <div class="forms_field">
                                    <input type="password" placeholder="Mot de Passe" name="password"
                                        class="forms_field-input" required />
                                </div>
                            </fieldset>
                            @if ($errors->any())
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="forms_buttons">
                                <input type="submit" value="Se connecter" class="forms_buttons-action">
                            </div>
                        </form>
                    </div>
                    <div class="user_forms-signup">
                        <h2 class="forms_title">Inscription</h2>
                        <form class="forms_form" method="POST" action="{{ route('traitementInscription') }}">

                            <fieldset class="forms_fieldset">
                                <div class="forms_field">
                                    Vous êtes :
                                </div>
                                <div class="forms_field">
                                    <div style="display: inline-block;">
                                        <input type="radio" id="particulier" name="type" value="1">
                                        <label for="particulier">Particulier</label>
                                    </div>
                                    <div style="display: inline-block;">
                                        <input type="radio" id="entreprise" name="type" value="2">
                                        <label for="entreprise">Entreprise</label>
                                    </div>
                                </div>
                                <div class="forms_field">
                                    <input type="text" placeholder="Nom" name="nom" class="forms_field-input"
                                        required />
                                </div>
                                <div class="forms_field">
                                    <input type="email" placeholder="Email" name="email" class="forms_field-input"
                                        required />
                                </div>
                                <div class="forms_field">
                                    <input type="text" placeholder="Contact" name="contact" class="forms_field-input"
                                        required />
                                </div>
                                <div class="forms_field">
                                    <input type="text" placeholder="Adresse" name="adresse" class="forms_field-input"
                                        required />
                                </div>
                                <div class="forms_field">
                                    <input type="password" placeholder="Mot de passe" name="mdp"
                                        class="forms_field-input" required />
                                </div>
                            </fieldset>
                            <div class="forms_buttons">
                                <input type="submit" value="S'inscrire" class="forms_buttons-action">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- partial -->
    <script src="{{ asset('assets/js/login.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/animationLogin.js') }}"></script>

</body>

</html>
