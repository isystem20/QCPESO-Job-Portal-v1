<!DOCTYPE html>
<html lang="en">

<head>
<title>QC P.E.S.O. Log-In</title>


<link rel="icon" href="<?php echo base_url()?>themes/ltr/vertical-static/assets/images/auth/qcpeso.png" type="image/x-icon">

<meta name="google-signin-client_id" content="453639693637-8utkl362om0v1qad2jmgdbbhla6l9m5u.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>  



<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

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

</div>
</div>
<p class="text-inverse b-b-default text-left p-b-5">Sign in easily with your social account:</p>
<div class="row m-b-20">
<div class="col-md-6">
<button class="btn btn-facebook m-b-20"><i class="icofont icofont-social-facebook"></i>Sign in with facebook</button>
</div>
<div class="col-md-6">

<div class="g-signin2" data-onsuccess="onSignIn" data-width="225"></div>

</div>
</div>
<p class="text-inverse b-b-default text-left p-b-5">Sign in with your regular account</p>
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
<a href="<?php echo base_url(); ?>dashboard" type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</a>
<p class="text-inverse m-t-25 text-center">Don't have an account? <a href="#"> Register </a> here for free!</p>
</div>
</div>



</div>
</form>

</div>

</div>

</div>

</div>

</section>



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

// 	$('#connecteditsymx9io6he').text('Sign-in With G-Mail');
// 	});
</script>


</body>

</html>
