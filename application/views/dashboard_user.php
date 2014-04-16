<!DOCTYPE html>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2 main-menu-span">
			<div class="nav-collapse sidebar-nav">
				<ul class="nav nav-tabs nav-stacked main-menu">
					<li><a href="<?php echo base_url();?>popular"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Home</span></a></li>
					<li class="active"><a href="<?php echo base_url();?>dashboard"><i class="icon-dashboard icon-white"></i><span class="hidden-tablet"> DashBoard</span></a></li>
					<li><a href="<?php echo base_url();?>profile"><i class="icon-user icon-white"></i><span class="hidden-tablet"> My Account</span></a></li>
					<li><a href="<?php echo base_url();?>friends"><i class="icon-globe icon-white"></i><span class="hidden-tablet"> Friends</span></a></li>
					<li id="invite"><a href="<?php echo base_url();?>friends"><i class="icon-bullhorn icon-white"></i><span class="hidden-tablet"> Invite Friends</span></a></li> 
					<li><a href="activities.html"><i class="icon-tasks icon-white"></i><span class="hidden-tablet"> Activities</span></a></li>
					<li><a href="<?php echo base_url();?>redeem"><i class="icon-tags icon-white"></i><span class="hidden-tablet"> Redeem</span></a></li>
				</ul>
			</div>
		</div>
		<noscript>
			&lt;div class="alert alert-block span10"&gt;
			&lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
			&lt;p&gt;You need to have &lt;a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"&gt;JavaScript&lt;/a&gt; enabled to use this site.&lt;/p&gt;
			&lt;/div&gt;
		</noscript>
		<div id="content" class="span10" style="min-height: 465px;">
			<div class="row breadrump-block">
				<hr>
				<div class="span8">
					<ul class="breadcrumb">
						<li>
							<a href="#">
								Home
							</a>
							<span class="divider">
								/
							</span>
						</li>
						<li>
							<a href="#">
								Dashboard
							</a>
						</li>                   
					</ul>
				</div>
				<div class="span3">
					<form class="form-search">
						<div class="input-append">
							<input type="text" placeholder="Find apps, people, offers" class="input-large search-query" id="appendedInputButton">
							<button type="button" class="btn">
								<i class="icon-search"></i>
							</button>
						</div>
					</form>
				</div>
				<hr>
				<div class="row-fluid">
					<div class="box span3" ondesktop="span3" ontablet="span6">
						<div class="my-profile">
							<div class="my-profile-img">
								<img class="fbPic" alt="" src="<?php if($this->session->userdata('fb')){ echo 'https://graph.facebook.com/'. $user_data[0]['fb_id'] . '/picture';}else{if($user_data[0]['img']){ echo base_url('public/upload/user') . '/' . $user_data[0]['img'];}}?>" />                                
              </div>
							<div class="user-name"><?php echo $user_data[0]['first_name']?></div>
							<div class="follows">
								<span>
									Followers 
								</span>,
								<span>
									Following 
								</span>
							</div>
							<a class="profile-link" data-original-title="Profile completeness" data-placement="top" rel="tooltip" href="profile.html">
								<div class="progress progress-striped">
										<div style="width: <?php if($user_data[0]['active'] != 1){
																						if(isset($user_data[0]['password'])){
																							echo '60%;';
																						}else{
																							echo '30%;';
																						}
																					}else{
																						echo '100%;';
																					}
																	?>" class="bar">
										</div>
								</div>
							</a>
							<div class="profile-social-icnos">
								<a class="btn btn" href="#"><i class="fa-icon-facebook"></i></a>
								<a class="btn btn" href="#"><i class="fa-icon-twitter"></i></a>
								<a class="btn btn" href="#"><i class="fa-icon-google-plus"></i></a>
								<a class="btn btn" href="#"><i class="fa-icon-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div ondesktop="span5" ontablet="span10" class="box span5 noMargin">
						<div class="tot-spiff-box">
							<h2><?php echo $user_data[0]['spiff_points']; ?></h2>   
							<h3>Spiffs</h3>     
						</div>
					</div>
					<div class="box span3 noMargin" ondesktop="span3" ontablet="span6">
						<div class="my-profile clearfix">
							<div class="circleStatsItem red activity-meter">
								<i class="fa-icon-thumbs-up"> </i>
								<span class="plus"> + </span>
								<span class="percent"> % </span>
								<input type="text" class="orangeCircle" value="0" style="width: 60px; position: absolute; margin-top: 40px !important; margin-left: -120px !important; font-size: 27px; border: medium none; background: none repeat scroll 0% 0% transparent; font-family: Arial; font-weight: bold; text-align: center; color: rgb(250, 88, 51); padding: 2px 0px 0px;" readonly="readonly">
							</div>
							<div class="box-title">Activity Meter</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row-fluid">
					<div class="circleStats">
						<div ondesktop="span2" ontablet="span4" class="span2 empty-circle">
            	&nbsp;
            </div>
						<div ondesktop="span2" ontablet="span4" class="span2">
             	<div class="circleStatsItem blue">
              	<i class="fa-icon-bullhorn"></i>
								<span class="plus">+</span>
								<span class="percent"></span>
								<input type="text" class="blueCircle" value="0" style="width: 60px; position: absolute; margin-top: 42px; margin-left: -90px; font-size: 30px; border: medium none; background: none repeat scroll 0% 0% transparent; font-family: Arial; font-weight: bold; text-align: center; color: rgb(47, 171, 233); padding: 2px 0px 0px;" readonly="readonly">
							</div>
							<div class="box-small-title">Redeemed Offers</div>
						</div>
						<div ondesktop="span2" ontablet="span4" class="span2">
							<div class="circleStatsItem yellow">
              	<i class="fa-icon-user"></i>
								<span class="plus">+</span>
								<span class="percent"></span>
              	<input type="text" class="yellowCircle" value="0" style="width: 60px; position: absolute; margin-top: 42px; margin-left: -90px; font-size: 30px; border: medium none; background: none repeat scroll 0% 0% transparent; font-family: Arial; font-weight: bold; text-align: center; color: rgb(231, 229, 114); padding: 2px 0px 0px;" readonly="readonly">
		          </div>
							<div class="box-small-title">Friends</div>
						</div>
						<div ondesktop="span2" ontablet="span4" class="noMargin span2">
							<div class="circleStatsItem pink">
              	<i class="fa-icon-globe"></i>
								<span class="plus">+</span>
								<span class="percent">%</span>
              	<input type="text" class="pinkCircle" value="0" style="width: 60px; position: absolute; margin-top: 42px; margin-left: -90px; font-size: 30px; border: medium none; background: none repeat scroll 0% 0% transparent; font-family: Arial; font-weight: bold; text-align: center; color: rgb(228, 43, 117); padding: 2px 0px 0px;" readonly="readonly">
              </div>
							<div class="box-small-title">Spiffs among friends</div>
						</div>
						<div ondesktop="span2" ontablet="span4" class="span2">
							<div class="circleStatsItem lightorange">
								<i class="fa-icon-shopping-cart"></i>
								<span class="plus">+</span>
								<span class="percent"></span>
								<input type="text" class="lightOrangeCircle" value="0" style="width: 60px; position: absolute; margin-top: 42.8571px; margin-left: -90px; font-size: 30px; border: medium none; background: none repeat scroll 0% 0% transparent; font-family: Arial; font-weight: bold; text-align: center; color: rgb(244, 167, 12); padding: 2px 0px 0px;" readonly="readonly">
							</div>
							<div class="box-small-title">purchases</div>
						</div>
					</div>
				</div>
				<br><hr><br>
				<div class="sortable row-fluid ui-sortable">
					<a class="quick-button span2" href="friends.html">
						<i class="fa-icon-group"></i>
						<p>Friends</p>
						<span class="notification">$value</span>
					</a>
					<a class="quick-button span2" href="activities.html">
						<i class="fa-icon-comments-alt"></i>
						<p>Activities</p>
						<span class="notification green">$value</span>
					</a>
					<a class="quick-button span2">
						<i class="fa-icon-rss"></i>
						<p>Spiffs</p>
					</a>
					<a class="quick-button span2" href="<?php echo base_url('redeem');?>">
						<i class="fa-icon-gift"></i>
						<p>Gifts</p>
						<span class="notification red">$value</span>
					</a>
				</div>
				<br>
				<hr>
				<div class="row-fluid">	
					<div ondesktop="span4" ontablet="span6" class="box span4">
						<div class="box-header">
							<h2><i class="icon-user"></i><span class="break"></span>Get Spiffed Friends</h2>
							<div class="box-icon">
								<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
								<a class="btn-close" href="#"><i class="icon-remove"></i></a>
							</div>
						</div>
						<div class="friends-action  clearfix">	
							<span class="pull-right"><a href="friends.html">View all () </a></span> 
						</div>
						<div class="box-content">
							
						</div>
					</div>
				<!--/span-->
          <div ondesktop="span4" ontablet="span6" class="box span4">
						<div class="box-header">
							<h2><i class="fa-icon-facebook"></i><span class="break"></span>facebook Friends</h2>
							<div class="box-icon">
								<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
								<a class="btn-close" href="#"><i class="icon-remove"></i></a>
							</div>
						</div>
						<div class="friends-action  clearfix">	
							<span class="pull-right"><a href="friends.html">View all () </a></span> 
						</div>
						<div class="box-content">
						</div>
					</div>
					<div ondesktop="span4" ontablet="span6" class="box span4">
						<div class="box-header">
							<h2><i class="fa-icon-twitter"></i><span class="break"></span>Twitter followers</h2>
							<div class="box-icon">
								<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
								<a class="btn-close" href="#"><i class="icon-remove"></i></a>
							</div>
						</div>
						<div class="friends-action  clearfix">	
							<span class="pull-right"><a href="friends.html">View all () </a></span> 
						</div>
						<div class="box-content">
							
						</div>
					</div><!--/span-->
					<!--/span-->
				</div>
			</div>
		</div>
	</div>
</div>