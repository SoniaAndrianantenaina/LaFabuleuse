<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Animated Login and Sign up</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<!--
  This was created based on the Dribble shot by Deepak Yadav that you can find at https://goo.gl/XRALsw
  I'm @hk95 on GitHub. Feel free to message me anytime.
-->

<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">Don't have an account?</h2>
        <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <button class="user_unregistered-signup" id="signup-button">Sign up</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">Have an account?</h2>
        <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="forms_form" method="POST" action="{{ route('connectUser') }}">
            @csrf
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="email" placeholder="Email" name="email" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Mot de Passe" name="password" class="forms_field-input" required />
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
        <form class="forms_form" method="POST" action="{{ route('traaitementInscription') }}">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Nom" name="nom" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" name="email" class="forms_field-input" required />
            </div>
            <div class="forms_field">
                <input type="text" placeholder="Contact" name="contact" class="forms_field-input" required />
              </div>
              <div class="forms_field">
                <input type="text" placeholder="Adresse" name="adresse" class="forms_field-input" required />
              </div>
            <div class="forms_field">
              <input type="password" placeholder="Mot de passe" name="password" class="forms_field-input" required />
            </div>
            <div class="forms_field">
                <input type="password" placeholder="Retape le mot de passe" class="forms_field-input" required />
              </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="S'inscrire'" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- partial -->
  <script  src="{{ asset('assets/js/login.js') }}"></script>

</body>
</html>
