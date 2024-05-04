<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login &amp; Sign Up Form Concept</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>  --}}
  <button class="btn_login" onclick="change_to_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy" id="ba_opacity">
  <h2>INSCRIPTION</h2>

  
  {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}

  <button class="btn_sign_up" onclick="change_to_sign_up()">S'inscrire</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="{{ asset('assets/img/wine.jpg') }}" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="{{ asset('assets/img/wine.jpg') }}" alt="" />
       </div>
 <div class="cont_form_login">
<a href="#" onclick="hidden_login_and_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
   <form method="POST" action="{{ route('connectUser') }}">
        <input type="text" placeholder="Email" name="email" />
        <input type="password" placeholder="Password" name="password"/>
        <button class="btn_login" onclick="change_to_login()">Se Connecter</button>
   </form>
 
  </div>
  
   <div class="cont_form_sign_up">
<a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>INSCRIPTION</h2>
     <form>
        <input type="text" placeholder="Email" name="email" />
        <input type="text" placeholder="User" />
        <input type="password" placeholder="Password" name="password"/>
        <input type="password" placeholder="Confirm Password" />
        <button class="btn_sign_up" onclick="change_to_sign_up()">S'inscrire</button>
     </form>

  </div>

    </div>
    
  </div>
 </div>
</div>
<!-- partial -->
  <script  src="{{ asset('assets/js/login.js') }}"></script>

</body>
</html>
