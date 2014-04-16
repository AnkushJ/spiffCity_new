<!DOCTYPE html>
<head>
<!-- start: Meta -->
  <meta charset="utf-8">
  <title>Welcome to Get Spiffed - Your social currency engine</title>
  <meta name="description" content="Get Spiffed - Your social currency engine">
  <meta name="keywords" content="Get Spiffed - Your social currency engine">
  <meta name="author" content="Get Spiffed - Your social currency engine">
  <!--<meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">-->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">
  <link href="assets/css/parallax-slider.css" rel="stylesheet">
  <link href="assets/css/validationEngine.jquery.css" rel="stylesheet">
  <style>
		.msg{
			color: red;
		}
	</style>
</head>

<body>
  <header>
		<div class="container">
			<div class="row">
				<div class="logo span3"> <i class="ico-charts circle"></i><a href="welcome" class="brand">Get<span>Spiffed</span>.</a> </div>
				<div class="span9">
					<div class="navbar navbar-inverse">
						<div class="navbar-inner"> <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li class="active"> <a href="#">Home</a> </li>
									<li><a href="redeem">Redeem</a></li>
									<li><a href="">People</a></li>
									<li><a href="">Apps</a></li>
									<li><a id="home-login" href="#signin">Login</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </header>
  <div class="slider-wrapper">
		<div id="da-slider" class="da-slider" style="background-position: 3000% 0%;">
			<div class="da-slide da-slide-fromright da-slide-current">
				<h2>Social Currency Engine</h2>
				<p>Capture your social value when you and your friends get rewarded for interactions across your social networks.</p>
				<a href="social_currency_engine.html" class="da-link">Read more</a>
				<div class="da-img"><img src="assets/img/parallax-slider/spiff_social_engine.png" alt="spiff social engine"></div>
			</div>
			<div class="da-slide da-slide-toleft">
				<h2>Get Rewarded</h2>
				<p>With our universal rewards system for stuff you do in your social life like play games, take photos, check in, post status, tweet, shop online and in store. </p>
				<a href="social_currency_engine.html" class="da-link">Read more</a>
				<div class="da-img"><img src="assets/img/parallax-slider/responsive.png" alt="image02"></div>
			</div>
			<div class="da-slide da-slide-toleft">
					<h2>Spiff City</h2>
					<p>SpiffCity.com is a community where you CrowdCast live events, explore activities and unleash your social value. Get Spiffed!  </p>
					<a href="http://www.spiffcity.com" class="da-link">Check it out</a>
					<div class="da-img"><img src="assets/img/parallax-slider/spiff-city.png" alt="image03"></div>
			</div>
			<div class="da-slide da-slide-toleft">
				<h2>Get Involved</h2>
				<p>You don’t have to be a programming expert to make a difference. If you love social media you can help others. </p>
				<a href="social_currency_engine.html" class="da-link">Read more</a>
				<div class="da-img"><img src="assets/img/parallax-slider/get_spiff_banner3.png" alt="Get spiff banner"></div>
			</div>
			<nav class="da-arrows"> <span class="da-arrows-prev"></span> <span class="da-arrows-next"></span> </nav>
			<nav class="da-dots"><span class="da-dots-current"></span><span class=""></span><span class=""></span><span class=""></span></nav></div>
		</div>
	</div>
  <div id="wrapper">
    <div class="container">
      <hr>
      <div class="hero-unit">
        <h3> Get Spiffed is dedicated to keeping the power of social media in the hands of the users and giving them the tools to capture their social value.  Together we will build brighter more interconnected social media experience for us all. </h3>
        <p><a href="" class="btn btn-primary btn-large">Learn more »</a></p>
      </div>
      <hr>
      <div class="row" id="login-box">
        <div class="span4"> 
          <div class="steps_block clearfix">
            <div class="step-number"> 1 </div>
              <div class="step-desc">
                <span>Singup </span> : sign up and connect your social networks with the Social Currency Engine
              </div>
          </div>
          <div class="steps_block clearfix">
            <div class="step-number"> 2 </div>
              <div class="step-desc">
                <span>Shop </span> : for the best offers on stuff you like to do in your city 
              </div>
          </div>
          <div class="steps_block clearfix">
            <div class="step-number"> 3 </div>
              <div class="step-desc">
                <span>Play  </span> : games, explore apps and surf new websites 
              </div>
          </div>
          <div class="steps_block clearfix">
            <div class="step-number"> 4 </div>
              <div class="step-desc">
                <span>Redeem  </span> : special offers and popular gift cards, earn Spiff Dollars for activities that you and your friends do
              </div>
          </div>       
        </div>      
        <div class="span4" >
          <div id="signup">
              <div class="title">Create an account. It's free!</div>                
              <form class="form-stacked" method="post" action="welcome/signup" id="frmRegistration">
               <fieldset>                      
                  <div class="clearfix">
                    <div class="input">
												<?php
													if ($this->session->flashdata('errorSignUp')){ 
												?>
													<!-- Notification -->
															<h4 class="msg"><?php echo $this->session->flashdata('errorSignUp'); ?></h4>
													<!-- /Notification -->
												<?php
													}
												?>
                      <input type="text" onblur="if(this.value=='') { this.value=this.defaultValue;} " onfocus="if(this.value==this.defaultValue)this.value='';" placeholder="Your Email Address" name="email" tabindex="6" id="email" class="validate[required,custom[email]]">
                      <span id="user_email"></span>
                    </div>
                  </div>
                  <div class="clearfix">
                    <div class="input">
                       <input type="text" onblur="if(this.value=='') { this.value=this.defaultValue;} " onfocus="if(this.value==this.defaultValue)this.value='';" placeholder="Username" name="username" tabindex="6" id="username" class="validate[required,minSize[4],custom[onlyLetterSp]] text-input">
                       <span id="username_result"> </span>
                    </div>
                  </div>
                  <div class="clearfix">
                    <div class="input">
                      <input type="password" class="validate[required,minSize[6],custom[onlyLetterNumber]] text-input" id="password" tabindex="7" name="password" placeholder="Password" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} "><span class="password-verdict"></span>                
                    </div>
                  </div>
                  <div class="clearfix">
                    <div>
                        <input type="password" onblur="if(this.value=='') { this.value=this.defaultValue;} " onfocus="if(this.value==this.defaultValue)this.value='';" placeholder="Confirm Password" name="confirm_password" tabindex="7" id="signup_confirm_password" class="validate[required,equals[password]] text-input">
                    </div>           
                  </div>
                  <div class="clearfix">
                    <div class="input">
                      <ul class="inputs-list">
                        <li>
                          <label>
                          <input type="checkbox" checked="checked" value="1" name="subscribe" tabindex="8" id="isignup_subscribe" class="validate[required]">
                          <span>I accept the Get Spiffed  <a target="_blank" href="#"> privacy policy </a></span></label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="clearfix  hidden">
                    <p class="clickedit">By clicking the button above, you agree to  Get Spiffed <a target="_blank" href="#"> terms of service </a> and  <a target="_blank" href="#"> privacy policy </a></p>
                  </div>
                  <div class="actions">              
                    <input type="submit" value="Create your account" class="btn success large" tabindex="9">    
                  </div>
                </fieldset>
              </form>
            </div>
        </div>
        <div class="span4">
          <div id="signin" class="sign-in">
            <div class="title">Already a member? Sign in:</div>
            <form id="frmSignin" action="<?php echo base_url('welcome/signin'); ?>" name="homeLogin" method="post" class="form-stacked">
              <fieldset>
              <div class="clearfix">
                <div class="input">
									<?php
										if ($this->session->flashdata('error')){ 
									?>
										<!-- Notification -->
												<h4 class="msg"><?php echo $this->session->flashdata('error'); ?></h4>
										<!-- /Notification -->
									<?php
										}
									?>
									<input name="hiddenPage" value="page" type="hidden" >
                  <input id="isignin_username" tabindex="4" name="username" type="text" placeholder="Username" value="<?php set_value('username'); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} ">
                </div>
              </div>
              <div class="clearfix">
                <div class="input">
                  <input id="isignin_password" tabindex="5" name="password" type="password" placeholder="Password" value="<?php echo set_value('password'); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} ">
								</div>
              </div>
              <div class="clearfix">
                <div class="input">
                  <ul class="inputs-list">
                    <li>
                      <label>
                      <input id="isignin_remember" tabindex="6" type="checkbox" name="remember" value="1" checked="checked">
                      <span>Remember me</span></label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix">
                 <p class="reset">Recover your <a tabindex="7" href="/signin/reset" title="Recover your username or password">username or password</a></p>  
                </div>      
              <div class="actions">
                <input tabindex="8" class="btn btn-primary btn-large" type="submit" value="Log In">
                <div class="connect-with"> <span> Or login with </span></div>
                <div class="social-connect-btn clearfix">
									<?php if(!$fb_data['me']): ?>
									<a href="<?php echo $fb_data['loginUrl']; ?>" class="connect-facebook">
										<span> Login w/ facebook </span>
									</a>
										<!-- Or you can use XFBML -->
									<div class="fb-login-button" data-show-faces="false" data-width="100" data-max-rows="1" data-scope="email,user_birthday,publish_stream"></div>
										<?php else: ?>
										<img class="pic" alt="" src="https://graph.facebook.com/<?php echo $fb_data['uid']; ?>/picture" />
											Hi <?php echo $fb_data['me']['name']; ?>,
											<a href="<?php echo site_url('topsecret'); ?>">You can access the top secret page</a> or <a href="<?php echo $fb_data['logoutUrl']; ?>">logout</a>
									<?php endif; ?>
                  <a href="#" class="connect-twitter"> <span> Login w/ twitter </span></a>
                </div>
              </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="icons-box-vert-container">
          <div class="span4">
            <div class="icons-box-vert"> <i class="ico-cup ico-white circle-color-full"></i>
              <div class="icons-box-vert-info">
                <h3>Players</h3>
                <p>Use the social currency engine connect your friends and get rewarded when you or your friends play games, do activities and share your experience </p>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="span4">
            <div class="icons-box-vert"> <i class="ico-ok  ico-white circle-color-full"></i>
              <div class="icons-box-vert-info">
                <h3>Developers</h3>
                <p>Use the social currency engine to Promote, monetize and gamify your apps, drive loyalty with aligning you interests with the players interests</p>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="span4">
            <div class="icons-box-vert"> <i class="ico-credit ico-white circle-color-full"></i>
              <div class="icons-box-vert-info">
                <h3>Advertisers</h3>
                <p>Use the social currency engine to run campaigns with a multiplier effect to reach thousands of people with each PPC action. </p>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <hr>
    </div>
  </div>
		
  <div id="footer-menu">
    <div class="container">
      <div class="row">
        <div class="span2">
          <div id="footer-menu-logo" class="hidden-phone">
            <div id="logo-chart"></div>
            <a class="brand" href="welcome">Get<span>Spiffed</span>.</a>
          </div>
        </div>
        <div class="span9">
          <div id="footer-menu-links"> <ul id="footer-nav">
              <li><a href="welcome">Home</a></li>
              <li><a href="about">About</a></li>
              <li><a href="blog">Blog</a></li>
              <li><a href="contact">Contact</a></li>
              <li><a href="services">Business</a></li>
              <li><a href="terms">Terms</a></li>
              <li><a href="privacy">Privacy</a></li>
            </ul>
          </div>
        </div>
				<div class="span1  hidden-phone">
					<div id="footer-menu-back-to-top"> <a href="#"></a> </div>
				</div>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="span3">
          <h3>About Us</h3>
          <p> Get Spiffed is an internet community of social media advocates, contributors and developers working on your behalf.  When you use Get Spiffed and our apps connected with the Social Currency Engine you become part of the community that gives you the power to capture your social value. </p>
        </div>
        <div class="span3">
          <h3>Photo Stream</h3>
          <div class="flickr-widget">
            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=29609591@N08"></script><div class="flickr_badge_image" id="flickr_badge_image1"><a href="http://www.flickr.com/photos/29609591@N08/12344882985/"><img src="http://farm4.staticflickr.com/3785/12344882985_b1df3d961c_s.jpg" alt="A photo on Flickr" title="Rusty" height="75" width="75"></a></div><div class="flickr_badge_image" id="flickr_badge_image2"><a href="http://www.flickr.com/photos/29609591@N08/12234243593/"><img src="http://farm4.staticflickr.com/3737/12234243593_7cd8c5312c_s.jpg" alt="A photo on Flickr" title="Boathouse Isle of Danna" height="75" width="75"></a></div><div class="flickr_badge_image" id="flickr_badge_image3"><a href="http://www.flickr.com/photos/29609591@N08/12220237506/"><img src="http://farm8.staticflickr.com/7435/12220237506_0201bffebc_s.jpg" alt="A photo on Flickr" title="Vital Spark" height="75" width="75"></a></div><div class="flickr_badge_image" id="flickr_badge_image4"><a href="http://www.flickr.com/photos/29609591@N08/12176303006/"><img src="http://farm3.staticflickr.com/2888/12176303006_2d8f6e7924_s.jpg" alt="A photo on Flickr" title="Dancin Dog" height="75" width="75"></a></div><div class="flickr_badge_image" id="flickr_badge_image5"><a href="http://www.flickr.com/photos/29609591@N08/8637527812/"><img src="http://farm9.staticflickr.com/8542/8637527812_326926a060_s.jpg" alt="A photo on Flickr" title="Beech Tree Strathmore" height="75" width="75"></a></div><div class="flickr_badge_image" id="flickr_badge_image6"><a href="http://www.flickr.com/photos/29609591@N08/8627629925/"><img src="http://farm9.staticflickr.com/8521/8627629925_0781c1fc87_s.jpg" alt="A photo on Flickr" title="Fowlis" height="75" width="75"></a></div><div class="flickr_badge_image" id="flickr_badge_image7"><a href="http://www.flickr.com/photos/29609591@N08/8207432285/"><img src="http://farm9.staticflickr.com/8203/8207432285_b85b135b3e_s.jpg" alt="A photo on Flickr" title="Skotland" height="75" width="75"></a></div><div class="flickr_badge_image" id="flickr_badge_image8"><a href="http://www.flickr.com/photos/29609591@N08/8188704520/"><img src="http://farm9.staticflickr.com/8478/8188704520_8d7b0a9536_s.jpg" alt="A photo on Flickr" title="Elgol From Tokavaig" height="75" width="75"></a></div><div class="flickr_badge_image" id="flickr_badge_image9"><a href="http://www.flickr.com/photos/29609591@N08/8182862834/"><img src="http://farm9.staticflickr.com/8200/8182862834_45647ace5d_s.jpg" alt="A photo on Flickr" title="Buachaille Etive Mhor" height="75" width="75"></a></div><span style="position:absolute;left:-999em;top:-999em;visibility:hidden" class="flickr_badge_beacon"><img src="http://geo.yahoo.com/p?s=792600102&amp;t=5293dcf14fdf7eee1b8b08f9cc6a2778&amp;r=http%3A%2F%2Fwww.rosycontact.com%2Fspiffcity%2F&amp;fl_ev=0&amp;lang=en&amp;intl=in" width="0" height="0" alt=""></span>
            <div class="clear"></div>
          </div>
        </div>
        <div class="span6">
          <h3>Follow Us!</h3>
          <ul class="social-grid">
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-twitter"> <a href=" https://twitter.com/GetSpiffed"></a> </div>
                    <div class="social-info-back social-twitter-hover"> <a href=" https://twitter.com/GetSpiffed"></a> </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-facebook"> <a href="https://www.facebook.com/pages/Get-Spiffed/393235897390463?ref=ts&amp;fref=ts"></a> </div>
                    <div class="social-info-back social-facebook-hover"> <a href="https://www.facebook.com/pages/Get-Spiffed/393235897390463?ref=ts&amp;fref=ts"></a> </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-dribbble"> <a href="http://dribbble.com"></a> </div>
                    <div class="social-info-back social-dribbble-hover"> <a href="http://dribbble.com"></a> </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="social-item">
                <div class="social-info-wrap">
                  <div class="social-info">
                    <div class="social-info-front social-flickr"> <a href="http://flickr.com"></a> </div>
                    <div class="social-info-back social-flickr-hover"> <a href="http://flickr.com"></a> </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <form id="newsletter">
            <h3>Newsletter</h3>
            <p>Please leave us your email</p>
            <label for="newsletter_input">@:</label>
            <input type="text" id="newsletter_input">
            <input type="submit" id="newsletter_submit" value="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="copyright">
    <div class="container">
      <div class="span12">
        <p> © 2014-2015 <a href="http://getspiffed.com">Get Spiffed </a>, Inc. all rights reserved  </p>
      </div>
    </div>
  </div>
  <!--<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>-->
  <!--<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>-->
  <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.2.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.raty.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/workaround.js"></script>
 	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.validationEngine-en.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.validationEngine.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/pwstrength.js"></script?
	</script> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.caroufredsel/6.1.0/jquery.carouFredSel.packed.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/isotope.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/flexslider.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.cslider.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/slider.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jCarouselLite.js"></script>
  <!--<script defer="defer" src="assets/js/custom.js"></script>-->
  <script src="assets/js/fancybox.js"></script>
  <script>
    jQuery(document).ready(function() {
			$ = jQuery;
        jQuery("#act_carousel_vertical").jCarouselLite({
          vertical: true,  
          visible: 5,
          scroll: 1,
          auto: 3000,  
          speed: 1000,
          circular: false  
        }); 
         jQuery("#pop_carousel_vertical").jCarouselLite({
          vertical: true,  
          visible: 5,
          scroll: 1,
          auto: 3000,  
          speed: 2000,
          circular: false  
        });
				 
									
									 //to validate the signup form input fields !!
				jQuery("#frmRegistration").validationEngine('attach',{
					binded: false
				});
				jQuery("#frmSignin").validationEngine('attach',{
					binded: false
				});
				
				
				 // to show email availability
				jQuery("#email").keyup (function(){
					if($("#email").val().length <1){
						$("#user_email").html("<font color='RED'></font>");
					}
					else{
						if (jQuery("#email").val().length>5) {
							jQuery("#user_email").html("font color='GREEN'>Checking</font>");
							jQuery.ajax({
								type:"POST",
								url:"<?php echo base_url('welcome/check_email'); ?>",
								data:"user_email="+jQuery("#email").val(),
								success:function(msg){
									if (msg['success'] == true) {
										jQuery("#user_email").html("<font color='GREEN'>Available</font>");
									}else{
										jQuery("#user_email").html("<font color='RED'>Already Taken</font>");
									}
								}
							});
						}
					}
				});
					
					
					// to show username availability
				  $("#username").keyup(function(){
						if($("#username").val().length <1){
							$("#username_result").html("<font color='RED'></font>");
						}
						else{
							if($("#username").val().length <4){
								$("#username_result").html("<font color='RED'>Minimuim amount of chars is 4.</font>");
							}
							else{
								$("#username_result").html("<font color='GREEN'>Checking...");
								$.ajax({
									type:"POST",
									url :"<?php echo base_url('signUp'); ?>/check_username_availability",
									data:"user="+$("#username").val(),
									success: function(msg){
										if (msg['success'] == true) {
											$("#username_result").html("<font color='GREEN'>Available.</font");
										}else{
											$("#username_result").html("<font color='RED'>Already Taken.</font>");
										}
									}
								});
							}
						}
					});
					
					
					//to show password strength during signup input !!
					var options = {
						minChar: 5,
						bootstrap3: false,
					};
					jQuery("#password").pwstrength(options);
					jQuery(document).ready(function () {
						"use strict";
						var options = {
							minChar: 8,
							bootstrap3: false,
							errorMessages: {
								password_too_short: "<font color='red'>The Password is too short</font>",
								same_as_username: "Your password cannot be the same as your username"
							},
							scores: [17, 26, 40, 50],
							verdicts: ["Weak", "Normal", "Medium", "Strong", "Very Strong"],
							showVerdicts: true,
							showVerdictsInitially: false,
							raisePower: 1.4,
							usernameField: "#username",
						};
				  }); 	 
    });
  </script>
  <script type="text/javascript">
//  jQuery(document).ready(function() {
//  	jQuery('#mycarousel').carouFredSel({
//  					auto: false,
//					circular: false,
//   					infinite: false,
//					prev: '#prev2',
//					next: '#next2',
//					responsive: true,
//					width: '100%',
//					scroll: 2,
//					items: {
//						width: null,
//						visible: {
//							min: null,
//							max: 4
//						}
//					}
//				});
//  });
    jQuery('#home-login').click(function(){  
			var liIndex = $(this).index();
			var contentPosTop = $('#login-box').eq(liIndex).position().top;
		  
			$('html, body').stop().animate({
				scrollTop: contentPosTop
			}, 1500);
		});
    jQuery('.review_btn').click(function(e){
      e.preventDefault();
      $('#review_app').modal('show');
    });
  </script>
  
</body>
