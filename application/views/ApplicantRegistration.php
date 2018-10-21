

<div class="page-body">
<div class="row">
<div class="col-sm-12">



<div class="card">
<div class="card-header">
<h5>Applicant Registration</h5>

<div class="card-header-right">
<i class="icofont icofont-rounded-down"></i>
<i class="icofont icofont-refresh"></i>
<i class="icofont icofont-close-circled"></i>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-md-12">
<div id="wizard">
<section>
<form class="wizard-form" id="verticle-wizard" action="#">


<h4>Account Information</h4>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Profile Picture: </label>
</div>
<div class="col-sm-8 col-lg-10">
<form class="form-inline" method="POST" action="" enctype="multipart/form-data">

            <input class="button" type="file" name="upload" id="input" accept="image/gif, image/jpeg, image/png" onchange="handleFiles(this.files)"/>
            
        </form>
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Email:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="userName-2" name="userName" type="text" class=" form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Repeat Email:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="userName-2" name="userName" type="text" class=" form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Password: </label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="userName-2" name="userName" type="text" class=" form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="userName-2" class="block">Repeat Password:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="userName-2" name="userName" type="text" class=" form-control">
</div>
</div>
</fieldset>


<h4> Personal Information </h4>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="name-2" class="block">Name:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="name-2" name="name" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="phone-2" class="block">Phone:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="phone-2" name="phone" type="number" class="form-control phone">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="surname-2" class="block">Street:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="surname-2" name="surname" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="surname-2" class="block">City:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="surname-2" name="surname-2" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">Country:</div>
<div class="col-sm-8 col-lg-10">
<select class="form-control required">
<option>Select Country</option>
<option>United States</option>
<option>Philippines</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="surname-2" class="block">Website:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="surname-2" name="surname-2" type="text" class="form-control" value="http://">
</div>
</div>
</fieldset>
<h4>Further Information</h4>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">Gender:</div>
<div class="col-sm-8 col-lg-10">
<select class="form-control required">
<option>Select Status</option>
<option>Female</option>
<option>Male</option>
</select>
</div>
</div>

<div class="form-group row">
<div class="col-sm-2 col-lg-4">Birthdate:</div>
<div class="col-sm-8 col-lg-10">

     <input type="date" name="birthday">
  
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">Languages:</div>
<div class="col-sm-8 col-lg-10">
<select class="form-control required">
<option>Select Language</option>
<option>Filipino</option>
<option>English</option>
<option>Spanish</option>
<option>Japanese</option>
<option>Chinese</option>
<option>French</option>
<option>Arabic</option>
<option>Korean</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">Nationality:</div>
<div class="col-sm-8 col-lg-10">
<select class="form-control required">
<option>Select Nationality</option>
<option>United States</option>
</select>
</div>
</div>
</fieldset>
<h4> Educational Background</h4>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Company-2" class="block">Highest Level Completed:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Company-2" name="Company:" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="CountryW-2" class="block">Course/Degree:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="CountryW-2" name="Country" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Name of School/University:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Year Graduated:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Last Attended</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
</fieldset>
<h4> Work Experience</h4>
<fieldset>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Company-2" class="block">Name of Company/Firm:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Company-2" name="Company:" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="CountryW-2" class="block">Address:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="CountryW-2" name="Country" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Inclusive Date From / To:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-2 col-lg-4">
<label for="Position-2" class="block">Position Head:</label>
</div>
<div class="col-sm-8 col-lg-10">
<input id="Position-2" name="Position" type="text" class="form-control required">
</div>

<br>
<br>
<br>

<div class="col-sm-8 col-lg-10">
          <button class="btn btn-inverse btn-outline-inverse">Submit</button>
</div>
</fieldset>
</form>
</section>
</div>
</div>
</div>
</div>
</div>




<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/classie/classie.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script src="<?php echo base_url();?>themes/bower_components/jquery.cookie/jquery.cookie.js"></script>
<script src="<?php echo base_url();?>themes/bower_components/jquery.steps/build/jquery.steps.js"></script>
<script src="<?php echo base_url();?>themes/bower_components/jquery-validation/dist/jquery.validate.js"></script>

<script src="<?php echo base_url();?>themes/cdn-cgi/scripts/5c5dd728cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="<?php echo base_url();?>themes/cdn-cgi/scripts/5c5dd728cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/form-validation/validate.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>themes/ltr/vertical-static/assets/js/script.js"></script>
<script src="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/forms-wizard-validation/form-wizard.js"></script>
</body>

</html>
