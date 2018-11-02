
        <!-- To top button--><a class="scroll-top" href="#top"><i class="fas fa-angle-up"></i></a>

        <!-- Scripts-->
        <script src="<?php echo base_url(); ?>themes/boomerang/assets/js/custom/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/boomerang/assets/js/custom/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/boomerang/assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script> -->
        <script src="<?php echo base_url(); ?>themes/boomerang/assets/js/custom/plugins.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/boomerang/assets/js/custom/custom.min.js"></script>

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
		        auth2.signOut().then(function() {
		            document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://acquiretechexam.atwebpages.com/";
		        });
		    }
		    // $(document).ready(function(){

		    //  $('#connecteditsymx9io6he').text('Sign-in With G-Mail');
		    //  });
		</script>
        
    </body>

</html>