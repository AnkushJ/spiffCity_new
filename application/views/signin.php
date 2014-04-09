<!DOCTYPE html>

<html lang="en"><head>

	<!-- start: Meta -->
	<meta charset="utf-8">
    <title>Login - Get Spiffed your social currency engine</title>
    <meta content="Get Spiffed - Your social currency engine" name="description">
    <meta content="Get Spiffed - Your social currency engine" name="keywords">
    <meta content="Get Spiffed - Your social currency engine" name="author">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta content="" property="og:title">
	<meta content="" property="og:description">
	<meta content="" property="og:type">
	<meta content="" property="og:url">
	<meta content="" property="og:image">
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css');?> ">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?> ">
	<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Droid+Serif" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Boogaloo" type="text/css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Economica:700,400italic" type="text/css" rel="stylesheet">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <style>
		.msg{
			color: red;
		}
	</style>
</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
      <!--start: Logo -->
      <div class="logo span3"> <i class="ico-charts circle"></i><a href="<?php echo base_url('welcome'); ?>" class="brand">Get<span>Spiffed</span>.</a> </div>
      <!--end: Logo -->
      <!--start: Navigation -->
      <div class="span9">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner"> <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li> <a href="<?php echo base_url('welcome'); ?>">Home</a> </li>
                <li><a href="<?php echo base_url('redeem'); ?>">Redeem</a></li>
                <li><a href="people">People</a></li>
                <li><a href="apps">Apps</a></li>
                <li class="active"><a id="home-login" href="#">Login</a></li>
               <!--  <li><a href="#" id="newpage-login">Login</a></li>-->
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--end: Navigation -->
    </div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-user ico-white"></i>Login</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
		
		<!-- start: Container -->	
		<div class="container">

				<div id="login-box" class="row">
    
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
        
      <!-- start: Signup Box -->
      <div class="span4">
          <div id="signup">
            <div class="title">Create an account. It's free!</div>
            <form action="<?php echo base_url('signIn/signup'); ?>" method="post" class="form-stacked">
              <fieldset>
              <div class="clearfix">
                <div class="input">
                  <input id="isignup_email" tabindex="9" name="email" type="text" placeholder="EMail" value="<?php echo $email; ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} ">
									<span id="spanEmail" class="msg"><?php echo form_error('email'); ?></span>
                </div>
              </div>
              <div class="clearfix">
                <div class="input">
										<input id="isignup_username" tabindex="10" name="username" type="text" placeholder="User Name" value="<?php echo $userid; ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} ">
										<span id="spanUserName" class="msg"><?php echo form_error('username'); ?></span>
                </div>
              </div>
              <div class="clearfix">
                <div class="input">
                  <input id="isignup_password" tabindex="11" name="password" type="password" placeholder="Password"onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} ">
                  <span id="spanPassword" class="msg"><?php echo form_error('password'); ?></span>
                </div>
              </div>
							<div class="clearfix">
                <div class="input">
                  <input id="isignup_conf_password" tabindex="12" name="confPassword" type="password" placeholder="Confirm Password"onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} ">
                </div>
              </div>
              <div class="clearfix">
                <div class="input">
                  <ul class="inputs-list">
                    <li>
                      <label>
                      <input id="isignup_subscribe" tabindex="13" type="checkbox" name="subscribe" value="1" checked="checked">
                      <span>I accept the Get Spiffed  <a href="#" target="_blank"> privacy policy </a></span></label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix  hidden">
                <p class="clickedit">By clicking the button above, you agree to  Get Spiffed <a href="#" target="_blank"> terms of service </a> and  <a href="#" target="_blank"> privacy policy </a></p>
              </div>
              <div class="actions">
                <input tabindex="14" class="btn success large" type="submit" value="Create your account">
                <div class="connect-with"> <span> Or connect with </span></div>
                <div class="social-connect-btn clearfix"> 
                  <a href="#" class="connect-facebook"> <span> Connect w/ facebook </span> </a>
                  <a href="#" class="connect-twitter"> <span> Connect w/ twitter </span></a>
                </div>
              </div>
              </fieldset>
            </form>
          </div>
        </div>
        <div class="span4">
          <div id="signin" class="sign-in">
            <div class="title">Already a member? Sign in:</div>
            <form action="<?php echo base_url('signIn/signin'); ?>"" name="login" method="post" class="form-stacked">
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
									<input name="hiddenPage" value="login" type="hidden" >
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
                  <a href="#" class="connect-facebook"> <span> Login w/ facebook </span> </a>
                  <a href="#" class="connect-twitter"> <span> Login w/ twitter </span></a>
                </div>
              </div>
              </fieldset>
            </form>
          </div>
        </div>
      <!-- End: Signin Box -->
    </div>

		</div>
		<!-- end: Container  -->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu">
  <!-- start: Container -->
  <div class="container">
    <!-- start: Row -->
    <div class="row">
      <!-- start: Footer Menu Logo -->
      <div class="span2">
        <div class="hidden-phone" id="footer-menu-logo">
          <div id="logo-chart"></div>
          <a href="welcome" class="brand">Get<span>Spiffed</span>.</a> </div>
      </div>
      <!-- end: Footer Menu Logo -->
      <!-- start: Footer Menu Links-->
      <div class="span9">
        <div id="footer-menu-links"> <ul id="footer-nav">
            <li><a href="<?php echo base_url('welcome'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('about'); ?>">About</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
            <li><a href="services">Business</a></li>
            <li><a href="<?php echo base_url('terms'); ?>">Terms</a></li>
            <li><a href="<?php echo base_url('privacy'); ?>">Privacy</a></li>
          </ul>
        </div>
      </div>
      <!-- end: Footer Menu Links-->
      <!-- start: Footer Menu Back To Top --> <div class="span1 hidden-phone">
        <div id="footer-menu-back-to-top"> <a href="#"></a> </div>
      </div>
      <!-- end: Footer Menu Back To Top -->
    </div>
    <!-- end: Row -->
  </div>
  <!-- end: Container  -->
</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
  <!-- start: Container -->
  <div class="container">
    <!-- start: Row -->
    <div class="row">
      <!-- start: About -->
      <div class="span3">
        <h3>About Us</h3>
        <p> Get Spiffed is an internet community of social media advocates, contributors and developers working on your behalf.  When you use Get Spiffed and our apps connected with the Social Currency Engine you become part of the community that gives you the power to capture your social value. </p>
      </div>
      <!-- end: About -->
      <!-- start: Photo Stream -->
      <div class="span3">
        <h3>Photo Stream</h3>
        <div class="flickr-widget">
          <script src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=29609591@N08" type="text/javascript"></script><div id="flickr_badge_image1" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/12344882985/"><img width="75" height="75" title="Rusty" alt="A photo on Flickr" src="http://farm4.staticflickr.com/3785/12344882985_b1df3d961c_s.jpg"></a></div><div id="flickr_badge_image2" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/12234243593/"><img width="75" height="75" title="Boathouse Isle of Danna" alt="A photo on Flickr" src="http://farm4.staticflickr.com/3737/12234243593_7cd8c5312c_s.jpg"></a></div><div id="flickr_badge_image3" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/12220237506/"><img width="75" height="75" title="Vital Spark" alt="A photo on Flickr" src="http://farm8.staticflickr.com/7435/12220237506_0201bffebc_s.jpg"></a></div><div id="flickr_badge_image4" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/12176303006/"><img width="75" height="75" title="Dancin Dog" alt="A photo on Flickr" src="http://farm3.staticflickr.com/2888/12176303006_2d8f6e7924_s.jpg"></a></div><div id="flickr_badge_image5" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/8637527812/"><img width="75" height="75" title="Beech Tree Strathmore" alt="A photo on Flickr" src="http://farm9.staticflickr.com/8542/8637527812_326926a060_s.jpg"></a></div><div id="flickr_badge_image6" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/8627629925/"><img width="75" height="75" title="Fowlis" alt="A photo on Flickr" src="http://farm9.staticflickr.com/8521/8627629925_0781c1fc87_s.jpg"></a></div><div id="flickr_badge_image7" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/8207432285/"><img width="75" height="75" title="Skotland" alt="A photo on Flickr" src="http://farm9.staticflickr.com/8203/8207432285_b85b135b3e_s.jpg"></a></div><div id="flickr_badge_image8" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/8188704520/"><img width="75" height="75" title="Elgol From Tokavaig" alt="A photo on Flickr" src="http://farm9.staticflickr.com/8478/8188704520_8d7b0a9536_s.jpg"></a></div><div id="flickr_badge_image9" class="flickr_badge_image"><a href="http://www.flickr.com/photos/29609591@N08/8182862834/"><img width="75" height="75" title="Buachaille Etive Mhor" alt="A photo on Flickr" src="http://farm9.staticflickr.com/8200/8182862834_45647ace5d_s.jpg"></a></div><span class="flickr_badge_beacon" style="position:absolute;left:-999em;top:-999em;visibility:hidden"><img width="0" height="0" alt="" src="http://geo.yahoo.com/p?s=792600102&amp;t=186aae6f0f4b78b6fb626be7a5b24098&amp;r=http%3A%2F%2Frosycontact.com%2Fspiffcity%2Flogin.html&amp;fl_ev=0&amp;lang=en&amp;intl=in"></span>
          <div class="clear"></div>
        </div>
      </div>
      <!-- end: Photo Stream -->
      <div class="span6">
        <!-- start: Follow Us -->
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
        <!-- end: Follow Us -->
        <!-- start: Newsletter -->
        <form id="newsletter">
          <h3>Newsletter</h3>
          <p>Please leave us your email</p>
          <label for="newsletter_input">@:</label>
          <input type="text" id="newsletter_input">
          <input type="submit" value="submit" id="newsletter_submit">
        </form>
        <!-- end: Newsletter -->
      </div>
    </div>
    <!-- end: Row -->
  </div>
  <!-- end: Container  -->
</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
  <!-- start: Container -->
  <div class="container">
    <div class="span12">
      <p> &copy; 2011-2012 <a href="http://getspiffed.com">Get Spiffed </a>, Inc. all rights reserved  </p>
    </div>
  </div>
  <!-- end: Container  -->
</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/js/jquery-1.8.2.js'); ?> "></script>
<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>

<!-- end: Java Script -->


</body></html>