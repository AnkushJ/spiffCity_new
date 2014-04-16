<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2 main-menu-span">
      <div class="nav-collapse sidebar-nav">
				<ul class="nav nav-tabs nav-stacked main-menu">
					<li><a href="<?php echo base_url();?>popular"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Home</span></a></li>
					<li><a href="<?php echo base_url();?>dashboard"><i class="icon-dashboard icon-white"></i><span class="hidden-tablet"> DashBoard</span></a></li>
					<li><a href="<?php echo base_url();?>profile"><i class="icon-user icon-white"></i><span class="hidden-tablet"> My Account</span></a></li>
					<li class="active" id="friend"><a href="<?php echo base_url();?>friends"><i class="icon-globe icon-white"></i><span class="hidden-tablet"> Friends </span></a></li>
					<li id="invite"><a><i class="icon-bullhorn icon-white"></i><span class="hidden-tablet"> Invite Friends</span></a></li>
					<li><a href="activities.html"><i class="icon-tasks icon-white"></i><span class="hidden-tablet"> Activities</span></a></li>
					<li><a href="<?php echo base_url();?>redeem"><i class="icon-tags icon-white"></i><span class="hidden-tablet"> Redeem</span></a></li>
				</ul>
			</div>
    </div>
    <noscript>
			<div class="alert alert-block span10">
				<h4 class="alert-heading">Warning!</h4>
				<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
			</div>
		</noscript>
    <div id="content" class="span10" style="min-height: 342px;">
			<div id="div_friends">
				<div class="row breadrump-block">
					<hr>
					<div class="span8">
						<ul class="breadcrumb">
							<li>
								<a href="index.html">Home</a> <span class="divider">/</span>
							</li>
							<li>
								<a href="#">Friends</a>
							</li>                   
						</ul>
					</div>
					<div class="span3">
						<form class="form-search">
							<div class="input-append">
								<input type="text" placeholder="Find apps, people, offers" class="input-large search-query" id="appendedInputButton">
								<button type="button" class="btn"> <i class="icon-search"></i></button>
							</div>
						</form>
					</div>
					<hr>
				</div>
				<div class="row-fluid friends-filter clearfix">
					<div class=" span8  pull-right">
						<div id="filters">
							<ul class="option-set">
								<li><a href="#filter">All ()</a></li>
								<li><a class="selected" href="#filter"><i class="fa-icon-user"></i>Get Spiffed  (<?php echo count($user_data); ?>)</a></li>
								<li><a href="#filter"><i class="fa-icon-facebook"></i>Facebook  ()</a></li>
								<li><a href="#filter"><i class="fa-icon-twitter"></i>Twitter ()</a></li>
							</ul>
						</div>
					</div>
					<div class=" span4  pull-left">
						<div class="actions">
							<div class="social-connect-btn clearfix"> 
								<a class="connect-facebook" href="#"> <span> Connect Friends </span> </a>
								<a class="connect-twitter" href="#"> <span> Connect Followers </span></a>
							</div>
						</div>
					</div>
				</div>
				<div id="friends-list" class="row-fluid">
					<div class="span12">
						<ul class="thumbnails">
							<?php foreach($user_data as $friend): ?>
								<li ondesktop="span4" ontablet="span8" class="span4">
									<div class="friends-list-item clearfix "> 
										<div class="span2"> <a href="#"> <img src="<?php echo base_url('public/upload/user') . '/' . $friend['img']; ?>" alt="<?php echo $friend['first_name']; ?>" class="avatar"></a> </div>
										<div class="span7">	<a href="#"><?php echo $friend['first_name'] . " " . $friend['last_name'] ;?></a></div>  
										<div class="span2">	<a id="unfriend" class="btn btn-success btn-mini" href="#">Unfriend</a> </div> 
									</div> 
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="row-fluid">
					<div class="pagination pagination-centered">
						<ul>
							<li class="disabled"><a href="#">«</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">»</a></li>
					 </ul>
					</div>
				</div>
				<hr>
			</div>
      <div id="invitation" class="hide">
				<div class="row breadrump-block">
					<hr>
					<div class="span8">
						<ul class="breadcrumb">
							<li>
								<a href="index.html">Home</a> <span class="divider">/</span>
							</li>
							<li>
								<a href="#">Invite Friends</a>
							</li>                   
						</ul>
					</div>
					<div class="span3">
						<form class="form-search">
							<div class="input-append">
								<input type="text" placeholder="Find apps, people, offers" class="input-large search-query" id="appendedInputButton">
								<button type="button" class="btn"> <i class="icon-search"></i></button>
							</div>
						</form>
					</div>
					<hr>
				</div>
				<div class="row-fluid">
					<div ondesktop="span12" ontablet="span12" class="box span12">
						<h1>Invite your friends to join <strong>Get Spiffed</strong>. </h1>
						<p>
							Invite your friends to join <strong>Get Spiffed</strong> and to share their App passion. Tell them about the great opportunities they will encounter as <strong>OFFERS</strong> from their favorite Apps. Earn Spiffs for each friend who accepts your <strong>invitation</strong> and join the opportunity of redeeming <strong>GREAT OFFERS</strong>.
						</p>
					</div>
				</div>
				<div class="row-fluid sortable ui-sortable">
					<div class="box span8">
						<div data-original-title="" class="box-header">
							<h2><i class="icon-edit"></i><span class="break"></span>Invite your friends by Email</h2>
							<div class="box-icon">
								<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
							</div>
						</div>
						<div class="box-content">
							<form class="form-horizontal" action="<?php echo base_url('friends/send_invitation_email'); ?>" >
								<fieldset>
									<p> 
										Invite your Gmail contacts. We will not store your password.
									</p>
									<br>
									<div class="control-group">
										<label for="inputEmail" class="control-label">Email</label>
										<div class="controls">
											<input type="text" placeholder="Email" id="inputEmail">
										</div>
									</div>
									<div class="control-group">
										<label for="inputPassword" class="control-label">Password</label>
										<div class="controls">
											<input type="password" placeholder="Password" id="inputPassword">
										</div>
									</div>
									<div class="control-group">
										<label for="inputPassword" class="control-label">&nbsp;</label>
										<div class="controls">
										 <button class="btn btn-primary" type="submit">Add friends</button>
										</div>
									</div>
									<hr>
									<div class="control-group">
										<label class="control-label">&nbsp;</label>
										<div class="controls">
										 <strong>Or invite email addresses</strong>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email addresses</label>
										<div class="controls">
											<textarea value="ype a list of invite of email addresses separated with comma" onclick="this.value=''" name="user_email_list" id="inviteemailid" cols="6" rows="4" class="span8 typeahead">Type a list of invite of email addresses separated with comma</textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Subject</label>
										<div class="controls">
											<textarea value="subject" onclick="this.value=''" name="user_email_list" id="invitesub" cols="6" rows="2" class="span8 typeahead"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="inputPassword" class="control-label">&nbsp;</label>
										<div class="controls">
										 <button class="btn btn-primary" type="submit">Send invitation</button>
										</div>
									</div>
								</fieldset>
							</form>   
						</div>
					</div><!--/span-->
					<div class="box span4">
						<div data-original-title="" class="box-header">
							<h2><i class="icon-edit"></i><span class="break"></span>Share link</h2>
							<div class="box-icon">
								<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
							</div>
						</div>
						<div class="box-content">
							<form class="form-horizontal">
								<fieldset>
									<p> 
										Share Get spiffed link on Facebook or Twitter.                                
									</p>
									<div class="">
										<label>Your message</label>
									</div>
									<div>
										<textarea value="ype a list of invite of email addresses separated with comma" onclick="this.value=''" name="user_email_list" id="invitetext" rows="4" class="span12 typeahead">I like Get Spiffed Come and share your App Passion</textarea>
									</div>
									<div class="actions">
										<div class="social-connect-btn clearfix"> 
											<a class="connect-facebook" href="#"> <span>Invite facebook  friends</span> </a>
											<a class="connect-twitter" href="#"> <span> Invite twitter  friends</span></a>
										</div>
									</div>
								</fieldset>
							</form>   
						</div> 
					</div>
				</div>
			</div>
      <hr>
    </div>
  </div>
  <div id="myModal" class="modal hide fade">
    <div class="modal-header">
			<button data-dismiss="modal" class="close" type="button">×</button>
      <h3>Settings</h3>
		</div>
    <div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
    <div class="modal-footer">
			<a data-dismiss="modal" class="btn" href="#">Close</a>
			<a class="btn btn-primary" href="#">Save changes</a>
		</div>
  </div>
  <div id="inviteFriendsPop" class="modal hide fade" style="display: none;" aria-hidden="true">
    <div class="topbar">   </div>
    <div class="modal-header">
      <a class="close" data-dismiss="modal">×</a>
      <h1><i class="fa-icon-group large"></i> Invite Friends</h1>
    </div>
    <div class="modal-body">
      <p><strong>Hi <?php echo $user_data[0]['first_name']; ?> !</strong> To make your Get spiffed experience  even more exciting, invite <strong>your friends</strong> and <strong>share your gamified life</strong></p>
    </div>
    <div class="modal-footer">
      <div class="social-connect-btn pull-right"> 
        <a class="connect-facebook" href="#"> <span>Connect friends</span> </a>
      </div>
      <a class="btn" data-dismiss="modal" href="#">Close</a>
      <a class="btn btn-primary" id="invite">Invite your friends Now</a>
    </div>
    <div class="topbar">   </div>
  </div>
  <div class="clearfix"></div>
</div>