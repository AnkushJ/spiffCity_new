<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Spiffed Dashboard </title>
    <meta content="Get Spiffed Dashboard " name="description">
    <meta content="Get Spiffed Dashboard " name="author">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<link  href="<?php echo base_url(); ?>assets/css/bootstrap.css" id="bootstrap-style" rel="stylesheet">
    <link  href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link  href="<?php echo base_url();?>assets/css/style.css" id="base-style" rel="stylesheet">
		<link  href="<?php echo base_url();?>assets/dashboard/css/style-responsive.css" id="base-style-responsive" rel="stylesheet">    	
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" type="text/css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Droid+Serif" type="text/css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Boogaloo" type="text/css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Economica:700,400italic" type="text/css" rel="stylesheet">
    
    
    <!--<link  href="<?php //echo base_url();?>assets/dashboard/css/slide_menu.css" rel="stylesheet">-->
    <!--<link  href="<?php //echo base_url();?>assets/css/jquery.fs.picker.css" rel="stylesheet">-->
    <!--<!--<link  href="assets/dashboard/css/font-awesome.css" rel="stylesheet">-->
    <!--<!--<link  href="assets/dashboard/css/font-awesome.min.css" rel="stylesheet">-->
    <!--<link  href="<?php //echo base_url();?>assets/css/validationEngine.jquery.css" rel = "stylesheet" type="text/css"/>-->
    <!--<link  href="<?php //echo base_url();?>assets/img/favicon.ico" rel="shortcut icon">-->
    
  </head>
  <body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="dropdown pull-left visible-phone">
						<a class="btn btn-navbar2 pull-left second" type="button" href="#modal">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<div style="display:none" id="modal">
							<ul class="nav nav-list left-menu" id="accordion">
								<li><a onclick="javascript: i_m_clicked('index.html');" href="index.html"><i class="icon-home icon-white"></i>Dashboard</a></li>
								<li><a onclick="javascript: i_m_clicked('profile.html');" class="item" href="profile.html"><i class="icon-white icon-user"></i>My Account</a></li>
								<li><a onclick="javascript: i_m_clicked('friends.html');" class="item" href="friends.html"><i class="icon-globe icon-white"></i>Friends</a></li>
								<li><a onclick="javascript: i_m_clicked('invite.html');" class="item" href="invite.html"><i class="icon-bullhorn icon-white"></i>Invite Friends</a></li>
								<li><a onclick="javascript: i_m_clicked('activities.html');" class="item" href="activities.html"><i class="icon-tasks icon-white"></i>Activities</a></li>
								<li><a onclick="javascript: i_m_clicked('apps.html');" class="item" href="apps.html"><i class="icon-list icon-white"></i>Apps</a></li> 
								<li><a onclick="javascript: i_m_clicked('redeem.html');" class="item" href="redeem.html"><i class="icon-tags icon-white"></i>Redeem</a></li>
								<li><a onclick="javascript: i_m_clicked('social.html');" class="item" href="social.html"><i class="icon-share icon-white"></i>Connected Networks</a></li>                                                                
							</ul>
						</div>
					</div>
					<script>
						function i_m_clicked(new_des){
							window.location = new_des;
						}
					</script>
					<a data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse" data-toggle="collapse" class="btn btn-navbar hidden-phone">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a href="" class="brand">
						<span class="hidden-phone">
							GetSpiffed
						</span>
					</a>
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">
							<li>
								<a href="#" class="btn">
									<i class="icon-warning-sign icon-white"></i>
								</a>
							</li>
							<li>
								<a href="#" class="btn">
									<i class="icon-tasks icon-white"></i>
								</a>
							</li>
							<li>
								<a href="#" class="btn">
									<i class="icon-envelope icon-white"></i>
								</a>
							</li>
							<li>
								<a href="#" class="btn">
									<i class="icon-wrench icon-white"></i>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="btn dropdown-toggle">
									<i class="icon-user icon-white"></i>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="">
											<i class="icon-user">
											</i>
											My Account
										</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>welcome">
											<i class="icon-off">
											</i>
											Logout
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	

	