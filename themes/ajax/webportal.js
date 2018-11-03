$(document).ready(function() {


	$('#applicant-register-form').submit(function(e){
		 e.preventDefault();

        $("#applicant-register-btn").prop("disabled", true);

        var newURL = $(this).attr('action');
        var newData  = {
                'firstName' : $('input[name=firstname]').val(),
                'lastName' : $('input[name=lastname]').val(),
                'emailAddress' : $('input[name=email]').val(),
                'password' : $('input[name=password]').val(),
                'password2' : $('input[name=password2]').val(),
            }
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",
              data: newData,
              success: function(data) {
                console.log(data);
                if($.isEmptyObject(data.error)){
					new PNotify({
			            title: 'Success!',
			            text: '',
			            icon: 'icofont icofont-info-circle',
			            type: 'success'
			        });
                  }
                  else{
					new PNotify({
			            title: 'Error!',
			            text: data.error,
			            icon: 'icofont icofont-info-circle',
			            type: 'error'
			        });

                  }
                $("#applicant-register-btn").prop("disabled", false);                   

              }
              
          }); 	
	});

});