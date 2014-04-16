<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2 main-menu-span">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="<?php echo base_url();?>popular"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Home</span></a></li>
            <li><a href="<?php echo base_url();?>dashboard"><i class="icon-dashboard icon-white"></i><span class="hidden-tablet"> DashBoard</span></a></li>
            <li class="active"><a href="<?php echo base_url();?>profile"><i class="icon-user icon-white"></i><span class="hidden-tablet"> My Account</span></a></li>
            <li><a href="<?php echo base_url();?>friends"><i class="icon-globe icon-white"></i><span class="hidden-tablet"> Friends</span></a></li>
            <li><a href="invite.html"><i class="icon-bullhorn icon-white"></i><span class="hidden-tablet"> Invite Friends</span></a></li> 
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
      <div id="content" class="span10" style="min-height: 416px;">
        <div class="row breadrump-block">
          <hr>
          <div class="span8">
            <ul class="breadcrumb">
              <li>
                <a href="#">Home</a> <span class="divider">/</span>
              </li>
              <li>
                <a href="#">My Account</a>
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
          <div ondesktop="span11" ontablet="span12" class="box span11">
            <div class="my-profile-progress">
              <h1><i class="icon-ok"></i><span class="break"></span> Complete these steps to become a real <strong>Spiff City user</strong>!</h1> 
              <div class="progress progress-striped active">
								<div style="width: <?php if($user_data[0]['active'] != 1){
																						if(isset($user_data[0]['password'])){
																							echo '60%';
																						}else{
																							echo '30%';
																						}
																					}else{
																						echo '100%';
																					}
																	?>" class="bar"></div>
              </div> 
              <div class="profile-task row-fluid">
                <div ondesktop="span3" ontablet="span6" class="span3 noMargin"> <span class="btn disabled"><i class=" icon-remove"></i></span> Complete your profile </div>
                <div ondesktop="span3" ontablet="span6" class="span3 noMargin"> <span class="btn btn-success disabled"><i class="icon-white icon-ok"></i></span> Upload a picture</div>
                <div ondesktop="span3" ontablet="span6" class="span3 noMargin"> <span class="btn disabled"><i class=" icon-remove"></i></span> Download an app </div>
                <div ondesktop="span3" ontablet="span6" class="span3 noMargin"> <span class="btn disabled"><i class=" icon-remove"></i></span> Invite your friends </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
					<?php
						if ($this->session->flashdata('successSavePswd')){ 
					?>
					<div class="success" style="color: red">
							<!--<a class="btn-minimize" href="#">x</i></a>-->
						<h4>Success</h4>
						<p><?php echo $this->session->flashdata('successSavePswd') ?></p>
					</div>
					<?php
						}
						if ($this->session->flashdata('errorSavePswd')){ 
					?>
					<div class="error" style="color: red">
						<h4>Error</h4>
						<?php echo $this->session->flashdata('errorSavePswd') ?>
					</div>
					<?php
						}
					?>
				<?php if(($user_data[0]['active'] != 1) && ($user_data[0]['password'] == NULL)){?>
					<div class="row-fluid sortable ui-sortable">
						<div class="box span12">
							<div data-original-title="" class="box-header">
								<h2><i class="icon-edit"></i><span class="break"></span>Save Password</h2>
								<div class="box-icon">
									<a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
								</div>
							</div>
							<div class="box-content">
								<form id="frmPassword" class="form-horizontal" action="<?php echo base_url('profile/save_password');?>" method="post">
									<fieldset>
										<div class="control-group">
											<label for="inputPassword" class="control-label">New password</label>
											<div class="controls">
												<input type="password" class="validate[required,minSize[6],custom[onlyLetterNumber]] text-input" id="save_password" name="save_password" placeholder="Password" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} "><span style="color: red" class="password-verdict"></span>                
											</div>
										</div>
										<div class="control-group">
											<label for="inputPassword" class="control-label">Confirm new password</label>
											<div class="controls">
												<input type="password" onblur="if(this.value=='') { this.value=this.defaultValue;} " onfocus="if(this.value==this.defaultValue)this.value='';" placeholder="Confirm Password" name="confirm_password" id="confirm_password" class="validate[required,equals[savePassword]] text-input">
											</div>
										</div>
										<div class="form-actions">
											<button class="btn btn-primary" type="submit">Save Password</button>
											<button class="btn">Cancel</button>
										</div>
									</fieldset>
								</form>   
							</div>
						</div>
					</div>
				<?php }?>
        <div class="row-fluid sortable ui-sortable">
          <div class="box span12">
            <div class="box-header" data-original-title="">
              <h2><i class="icon-edit"></i><span class="break"></span>My Profile</h2>
              <div class="box-icon">
                <a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
  						</div>
            </div>
            <div class="box-content">
							<?php
								if ($this->session->flashdata('successSaveProfile')){ 
							?>
							<div class="success" style="color: red">
								  <!--<a class="btn-minimize" href="#">x</i></a>-->
								<h4>Success</h4>
								<p><?php echo $this->session->flashdata('successSaveProfile') ?></p>
							</div>
							<?php
								}
								if ($this->session->flashdata('errorSaveProfile')){ 
							?>
							<div class="error" style="color: red">
								<h4>Error</h4>
								<?php echo $this->session->flashdata('errorSaveProfile') ?>
							</div>
							<?php
								}
							?>
              <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url('profile/save_profile_changes');?>" method="post">
                <fieldset>
                  <div class="control-group">
                    <label class="control-label">User name</label>
                    <div class="controls">
                      <span class="input-xlarge uneditable-input"><?php echo $user_data[0]['userid']; ?></span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="Input" class="control-label">First Name</label>
                    <div class="controls">
                      <input type="text" name="first_name" value="<?php if(!$user_data[0]['first_name']){echo '';}else{echo $user_data[0]['first_name'];} ?>" id="nameInput" class="input-xlarge ">
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="Input" class="control-label">Last Name</label>
                    <div class="controls">
                      <input type="text" name="last_name" value="<?php if(!$user_data[0]['last_name']){echo '';}else{ echo $user_data[0]['last_name'];}?>" id="nameInput" class="input-xlarge ">
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="date01" class="control-label">Birth date</label>
                    <div class="controls">
											<input id="datepicker" class="datepicker hasDatepick" type="text" value="<?php if(!$user_data[0]['dob']){echo '';}else{ echo $user_data[0]['dob'];} ?>" name="dob">
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="fileInput" class="control-label">Upload profile photo</label>
                    <div class="controls">
                      <!--<div class="uploader" id="uniform-fileInput">-->
												<?php echo form_upload(array('name' => 'img','id' => 'img','class' => 'imageFile uniform_on', 'size' => '19')); ?>
												<!--<input type="file" name="img" id="img" class="input-file uniform_on" value="" size="19" style="opacity: 0;">-->
                        <!--<span class="filename" style="-moz-user-select: none;">No file selected</span>-->
                        <!--<span class="action" style="-moz-user-select: none;">Choose File</span>-->
                      <!--</div>-->
                    
										<img src="<?php if($user_data[0]['img']){ echo base_url('public/upload/user') . '/' . $user_data[0]['img'];}?>" width="100px">
										</div>
								  </div>  
                  <div class="control-group">
                    <label for="inputEmail" class="control-label">Email</label>
                    <div class="controls">
                      <input type="text" name="email" placeholder="Email" id="inputEmail" value="<?php echo $user_data[0]['email']; ?>">
                    </div>
                  </div>
                   <div class="control-group">
                    <label for="inputEmail" class="control-label">ZIP code</label>
                    <div class="controls">
                      <input type="text" name="zip_code" placeholder="ZIP code" id="inputzip" value="<?php if(!$user_data[0]['zip_code']){echo '';}else{ echo $user_data[0]['zip_code'];} ?>">
                    </div>
                  </div>
                  <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Save changes</button>
                    <button class="btn">Cancel</button>
                  </div>
						  </fieldset>
              </form>
            </div>
          </div>
        </div>
        <div class="row-fluid sortable ui-sortable">
          <div class="box span12">
            <div data-original-title="" class="box-header">
              <h2><i class="icon-edit"></i><span class="break"></span>Password Change</h2>
              <div class="box-icon">
                <a class="btn-minimize" href="#"><i class="icon-chevron-up"></i></a>
              </div>
            </div>
						
            <div class="box-content">
							<?php
								if ($this->session->flashdata('successChangePswd')){ 
							?>
							<div class="success" style="color: red">
								  <!--<a class="btn-minimize" href="#">x</i></a>-->
								<h4>Success</h4>
								<p><?php echo $this->session->flashdata('successChangePswd') ?></p>
							</div>
							<?php
								}
								if ($this->session->flashdata('errorChangePswd')){ 
							?>
							<div class="error" style="color: red">
								<h4>Error</h4>
								<?php echo $this->session->flashdata('errorChangePswd') ?>
							</div>
							<?php
								}
							?>	
              <form id="frmConfirmPswd" class="form-horizontal" action="<?php echo base_url('profile/change_password');?>" method="post">
								<fieldset>
                  <div class="control-group">
                    <label for="inputPassword" class="control-label">Current password</label>
                    <div class="controls">
											<input type="password" onblur="if(this.value=='') { this.value=this.defaultValue;} " onfocus="if(this.value==this.defaultValue)this.value='';" placeholder="Current Password" name="oldpassword" id="oldpassword" class="validate[required] text-input">
										  <!--<input type="password" placeholder="Password" id="currentPassword" name="currentPassword">-->
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="inputPassword" class="control-label">New password</label>
                    <div class="controls">
											<input type="password" class="validate[required,minSize[6],custom[onlyLetterNumber]] text-input" id="newpassword" name="newpassword" placeholder="Password" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='') { this.value=this.defaultValue;} "><span style="color: red" class="password-verdict"></span>                
                      <!--<input type="password" placeholder="Password" id="newPassword" name="newPassword">-->
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="inputPassword" class="control-label">Confirm new password</label>
                    <div class="controls">
											<input type="password" onblur="if(this.value=='') { this.value=this.defaultValue;} " onfocus="if(this.value==this.defaultValue)this.value='';" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" class="validate[required,equals[newpassword]] text-input">
                      <!--<input type="password" placeholder="Password" id="confirmPassword" name="confirmPassword">-->
                    </div>
                  </div>
                  <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Save changes</button>
                    <button class="btn">Cancel</button>
                  </div>
                </fieldset>
              </form>   
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
</div>
  
  