<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
               
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact__form text-center">
                    <h4>Reset Password</h4>
                    <form id="resetForm">
                        <div class="row">
                            <div class="col-lg-12">
								<input type="password" placeholder="Password" id="password" required>
								<div id="passwordError"></div>
                            </div>
                            <div class="col-lg-12">
								<input type="password" placeholder="Confirm Password" id="rePassword" required>
								<div id="rePasswordError"></div>
                            </div>
                        </div>
                        <button type="submit" class="site-btn mb-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<script>
	$( document ).ready(function() {
		$('#password').keyup(function(){
			var password = $('#password').val();
			if(password.length>=6){
				var msg = '<div class="success">Password Ok!</div>';
				var sMsg = '<div class="error">Password not matching!</div>';
			}
			else{
				var msg = '<div class="error">Password must be atleast 6 letters</div>';
				var sMsg = '<div class="error">Password not matching!</div>';
			}

			$('#passwordError').html(msg);
			$('#rePasswordError').html(sMsg);
			
		});

		$('#rePassword').keyup(function(){
			var password = $('#password').val();
			var rePassword = $('#rePassword').val();
			if(password==rePassword){
				var msg = '<div class="success">Password matching</div>';
			}
			else{
				var msg = '<div class="error">Password not matching!</div>';
			}

			$('#rePasswordError').html(msg);
			
		});

		$( "#resetForm" ).submit(function( event ) {
			var pErr = $('#passwordError').children().attr('class');
			var rPErr = $('#rePasswordError').children().attr('class');

			if(pErr != "error" && rPErr != "error" ){
				var password = $('#password').val();
				$.ajax({
					type:'POST',
					url: '<?php echo base_url('forgot/reset') ?>', 
					data: {password: password},
					dataType: 'json',
					success: function(results){ 
						window.location.href = '<?php echo base_url('login')?>';
					},
				
					error:function(){
						console.log('error');
					}
				});
			}
			else{
				
			}
			event.preventDefault();
		});
	});
</script>