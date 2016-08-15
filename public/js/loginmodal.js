$(document).ready(function(){


	$('#loginmodal').click(function(){


			$('#login-modal').fadeToggle("medium");
			$('.content-signin').empty();
			$('.content-signin').append(
				'<div class="form-left">'+
									'<div class="field_username">'+
										'<input type="text" placeholder="Username or Email"/>'+
									'</div>'+

									'<div class="field_password">'+
										'<input type="password" placeholder="Password"/>'+
									'</div>'+

									
									'<input type="checkbox">'+
									'<span><a href="#" class="a-style">Forgot password ?</a></span>'+
									'<br>'+
									'<div class="clearfix"></div>'+
									

									'<button type="submit" class="button_login hvr-wobble-vertical">LOGIN</button>'+
								
				 '</div>'+


				'<div class="form-right">'+

								'<div class="login_social_title">'+
									'You can login using your social profile.'+
								'</div>'+

								'<div class="login_social_list">'+
									'<ul>'+
										'<li><a href="#" class="hvr-pulse-shrink"><img src="img/icon/social/facebook.ico"></a></li>'+
										'<li><a href="#" class="hvr-pulse-shrink"><img src="img/icon/social/twitter.ico"></a></li>'+
										'<li><a href="#" class="hvr-pulse-shrink"><img src="img/icon/social/google_plus.ico"></a></li>'+
										'<li><a href="#" class="hvr-pulse-shrink"><img src="img/icon/social/instagram.ico"></a></li>'+
										
									'</ul>'+
								'</div>'+

								'<div class="social_problems">'+
									'<a href="#">Problem with login?</a>'+

									'<button type="cancel" class="exit button_exit hvr-wobble-vertical">CANCEL</button>'+
								
								'</div>'+

				'</div>'

			);
		
		$('button[type="cancel"]').click(function(){
		$('#login-modal').slideUp("medium");

	});


	
	});

	


	$('#login-left').click(function(){

		$(this).fadeIn('slow').removeClass('unselect');
		$('#login-right').fadeIn('slow').addClass('unselect');

		$('.content-signup').empty();
		$('.content-signup').hide();
		
		$('.content-signin').empty();
		$('.content-signin').fadeIn("slow");
		$('.content-signin').append(
				'<div class="form-left">'+
									'<div class="field_username">'+
										'<input type="text" placeholder="Username or Email" class="form-style"/>'+
									'</div>'+

									'<div class="field_password">'+
										'<input type="password" placeholder="Password" class="form-style"/>'+
									'</div>'+

									
									'<input type="checkbox">'+
									'<span><a href="#" class="a-style">Forgot password ?</a></span>'+
									'<br>'+
									'<div class="clearfix"></div>'+
									

									'<button type="submit" class="button_login hvr-wobble-vertical">LOGIN</button>'+
								
				 '</div>'+


				'<div class="form-right">'+

								'<div class="login_social_title">'+
									'You can login using your social profile.'+
								'</div>'+

								'<div class="login_social_list">'+
									'<ul>'+
										'<li><a href="#" class="hvr-pulse-shrink"><img src="img/icon/social/facebook.ico"></a></li>'+
										'<li><a href="#" class="hvr-pulse-shrink"><img src="img/icon/social/twitter.ico"></a></li>'+
										'<li><a href="#" class="hvr-pulse-shrink"><img src="img/icon/social/google_plus.ico"></a></li>'+
										'<li><a href="#" class="hvr-pulse-shrink"><img src="img/icon/social/instagram.ico"></a></li>'+
										
									'</ul>'+
								'</div>'+

								'<div class="social_problems">'+
									'<a href="#">Problem with login?</a>'+

									'<button type="cancel" class="button_exit hvr-wobble-vertical" id="exit">CANCEL</button>'+
									
								'</div>'+



				'</div>'

			);

			$('button[type="cancel"]').click(function(){
					$('#login-modal').slideUp("medium");

			});

	});

	$('#login-right').click(function(){
		$(this).fadeIn('slow').removeClass('unselect');
		$('#login-left').fadeIn('slow').addClass('unselect');
		$('.content-signin').empty();
		$('.content-signin').hide();

		$('.content-signup').empty();
		$('.content-signup').fadeIn("slow");;
		$('.content-signup').append(

						'<div class="form-left clearfix">'+

							'<div class="field_userlogin">'+
								'<input type="text" placeholder="Username or Login" class="form-style"/>'+
							'</div>'+

							'<div class="field_useremail">'+
								'<input type="email" placeholder="E-mail" class="form-style"/>'+
							'</div>'+

							'<input type="checkbox">'+
							'<span><span class="span-style"> I agree with </span><a href="#" class="terms"> Terms and Conditions.</a></span>'+

							'<div class="clearfix"></div>'+
									

							'<button type="submit" class="button_login hvr-wobble-vertical">SIGN UP</button>'+
								

				 		'</div>'+

				 		'<div class="form-right">'+

							'<div class="field_pass">'+
								'<input type="password" placeholder="Password" class="form-style"/>'+
							'</div>'+

							'<div class="field_pass">'+
								'<input type="password" placeholder="Confirm Password" class="form-style"/>'+
							'</div>'+

							'<span class="span-style-right">Minimum 6 characters</span>'+
							'<br>'+
							'<div class="clearfix"></div>'+
							'<button type="cancel" class="button_exit move hvr-wobble-vertical" id="exit1">CANCEL</button>'+

						'</div>'


			);

		$('button[type="cancel"]').click(function(){
			$('#login-modal').slideUp("medium");

		});

	});






});