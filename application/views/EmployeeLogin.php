<!DOCTYPE html>
<html lang="en">

<head>
<title>QC P.E.S.O. Log-In</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Phoenixcoded">
<meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">

<meta name="author" content="Phoenixcoded">

<link rel="icon" href="<?php echo base_url()?>themes/ltr/vertical-static/assets/images/auth/qcpeso.png" type="image/x-icon">

<meta name="google-signin-client_id" content="453639693637-8utkl362om0v1qad2jmgdbbhla6l9m5u.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>  



<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>themes/ltr/vertical-static/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>themes/ltr/vertical-static/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>themes/ltr/vertical-static/assets/css/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>themes/ltr/vertical-static/assets/css/color/color-1.css" id="color" />
</head>

<style>
body{
     background: url(<?php echo base_url()?>themes/ltr/vertical-static/assets/images/auth/QCCityHall.jpg) no-repeat center center fixed;
     background-size: 100% 100%;
     height: 100%;
    }
</style>

<body class="menu-static" background="<?php echo base_url()?>themes/ltr/vertical-static/assets/images/auth/bgqc.png">
<section class="p-fixed d-flex text-center" >

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<div class="login-card card-block auth-body">
<form class="md-float-material">
<div class="text-center">

</div>
<div class="auth-box">
<div class="row m-b-20">
<div class="col-md-3">
<img src="<?php echo base_url()?>themes/ltr/vertical-static/assets/images/auth/qcpeso.png" alt="qcpeso.png" width="150">
</div>

<div class="col-md-9">
    <br>
    <br>
<h2><font color ="black"><B>QUEZON CITY</h2>PUBLIC EMPLOYMENT SERVICE OFFICE</B>
    <br>
    <br>
<h5>Personnel Log-In</h5>
</div>
</div>

<div class="input-group">
<input type="email" class="form-control" placeholder="Username">
<span class="md-line"></span>
</div>
<div class="input-group">
<input type="password" class="form-control" placeholder="password">
<span class="md-line"></span>
</div>
<div class="row m-t-25 text-left">
<div class="col-sm-6 col-xs-12">
<div class="checkbox-fade fade-in-primary">
<label>
<input type="checkbox" value="">
<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
<span class="text-inverse">Remember me</span>
</label>
</div>
</div>
<div class="col-sm-6 col-xs-12 forgot-phone text-right">
<a href="forgot-password.html" class="text-right f-w-600 text-inverse"> Forgot Password?</a>
</div>
</div>
<div class="row m-t-5">
<div class="col-md-12">
<button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>

</div>
</div>



</div>
</form>

</div>

</div>

</div>

</div>

</section>





<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>themes/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>themes/ltr/vertical-static/assets/js/script.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>themes/ltr/vertical-static/assets/js/common-pages.js"></script>

<script type="text/javascript">
    



function onSignIn(googleUser) {

    var profile = googleUser.getBasicProfile();

    var id_token = googleUser.getAuthResponse().id_token;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://acquiretechexam.atwebpages.com/');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // xhr.onload = function() {
    //   console.log('Signed in as: ' + xhr.responseText);
    // };
    // xhr.send('idtoken=' + id_token);
    xhr.send('idtoken=' + id_token + '&userid=' + profile.getId() + '&fullname: ' + profile.getName() + '&firstname: ' + profile.getGivenName() + '&lastname: ' + profile.getFamilyName() + "&image: " + profile.getImageUrl() + "&email: " + profile.getEmail());
    console.log(profile.getImageUrl());

};

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://acquiretechexam.atwebpages.com/";
    });
}
// $(document).ready(function(){

//  $('#connecteditsymx9io6he').text('Sign-in With G-Mail');
//  });
</script>


</body>

</html>
