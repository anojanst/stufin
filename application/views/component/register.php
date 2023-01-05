<!-- Application Form Section Begin -->
<section id="register" class="application-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <span>Giving Best Options For You</span>
                    <h2>Register Your Business</h2>
                </div>
            </div>
        </div>
        <form id="regForm">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <input type="text" placeholder="Business name" id="businessName" required>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <input type="email" placeholder="Email" id="email" required>
                    <div id="emailError"></div>                    
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <input type="password" placeholder="Password" id="password" required>
                    <div id="passwordError"></div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <input type="password" placeholder="Confirm Password" id="rePassword" required>
                    <div id="rePasswordError"></div>
                </div>

                <div class="col-lg-12 text-center">
                    <button type="submit" class="site-btn">Register</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Application Form Section End -->

<script>
	$( document ).ready(function() {
		$('#email').change(function(){
			var email = $('#email').val();
            console.log(email);
			$.ajax({
				type:'POST',
				url: '<?php echo base_url('ajaxEmail') ?>', 
				data: {email: email},
				dataType: 'json',
				success: function(results){ 
					var msg = '<div class="' + results['cls'] + '">' + results['msg'] + '</div>';
					$('#emailError').html(msg);
				},
			
				error:function(){
					console.log('error');
				}
			});
		});

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

		$( "#regForm" ).submit(function( event ) {
			var eErr = $('#emailError').children().attr('class');
			var pErr = $('#passwordError').children().attr('class');
			var rPErr = $('#rePasswordError').children().attr('class');

			if(eErr != "error" && pErr != "error" && rPErr != "error" ){
				var businessName = $('#businessName').val();
				var email = $('#email').val();
				var password = $('#password').val();
				$.ajax({
				type:'POST',
				url: '<?php echo base_url('registerUser') ?>', 
				data: {businessName: businessName, email: email, password: password},
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