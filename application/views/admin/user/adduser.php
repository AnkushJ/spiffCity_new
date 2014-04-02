<!--<script type="text/javascript">
$(document).ready(function(){ // jQuery DOM ready function.
  $("#frmUser").validate();
});
</script>-->

<?php

	if ($this->session->flashdata('error')){ 
	?>
	<!-- Notification -->
	<div class="notification error">
		<a href="#" class="close-notification tooltip" title="Hide Notification">x</a>
		<h4>Error</h4>
		<p><?php echo $this->session->flashdata('error'); ?></p>
	</div>
	<!-- /Notification -->
	<?php
	}
?>

<article class="content-box minimizer">
	
	<header>
				
		<h2 style="padding-right: 90px;">User</h2>
		<nav>
			<ul class="button-switch">
				<li><a class="button" href="<?php echo site_url("admin/user/"); ?>">List User</a></li>
			</ul>
		</nav>
		<!--<a title="Toggle Content Block" class="content-box-minimizer" href="#" style="display: block; left: 324px;">Toggle</a>-->
	</header>

	<section>
	
	<?php
	$attributes = array('id' => 'frmUser');
	echo form_open('admin/user/add',$attributes);
	echo form_fieldset('Add User');
	$datausername = array(
		  //'name'        => 'username',
		  //'id'          => 'username',
		  'class'		=> 'small required'
		);
  
  $class = array(
    'class' => 'small required'
  );
	?>
	<dl>
		<dt>
			<label>User ID</label>
		</dt>
		<dd>
			
			<?php
				$data = array(
              'name'        => 'userid',
              'id'          => 'userid',
              'value'       => set_value('userid'),
            );
			echo form_input($data); ?>
		</dd>
		<dd >
          <span id="spanUID" class="msg"><?php echo form_error('userid'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>Password</label>
		</dt>
		<dd>
			<?php
				$data = array(
              'name'        => 'password',
              'id'          => 'password',
              'value'       => set_value('password'),
            );
			echo form_password($data); ?>
		</dd>
		<dd >
          <span id="spanPassword" class="msg"><?php echo form_error('password'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>First Name</label>
		</dt>
		<dd>
			<?php
				$data = array(
              'name'        => 'firstname',
              'id'          => 'firstname',
              'value'       => set_value('firstname'),
            );
			echo form_input($data); ?>
		</dd>
		<dd >
          <span id="spanFName" class="msg"><?php echo form_error('firstname'); ?></span>
    </dd>
	</dl>	
	
	<dl>
		<dt>
			<label>Last Name</label>
		</dt>
		<dd>
			<?php
				$data = array(
              'name'        => 'lastname',
              'id'          => 'lastname',
              'value'       => set_value('lastname'),
            );
			echo form_input($data); ?>
		</dd>
		<dd >
          <span id="spanLName" class="msg"><?php echo form_error('lastname'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>E-Mail</label>
		</dt>
		<dd>
			<?php
				$data = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => set_value('email'),
            );
			echo form_input($data); ?>
		</dd>
		<dd >
          <span id="spanEMail" class="msg"><?php echo form_error('email'); ?></span>
    </dd>
	</dl>
	
	
	<dl>
		<dt>
			<label>D.O.B</label>
		</dt>
		<dd>
			<?php
				$data = array(
              'name'        => 'dob',
              'id'          => 'datepicker',
							'class'   =>  'datepicker',
              'value'       => set_value('dob'),
            );
			echo form_input($data); ?>
		</dd>
		<dd >
          <span id="spanDob" class="msg"><?php echo form_error('dob'); ?></span>
    </dd>
	</dl>
	
	
	<dl>
		<dt>
			<label>Zip Code</label>
		</dt>
		<dd>
			<?php
				$data = array(
              'name'        => 'zip',
              'id'          => 'zip',
              'value'       => set_value('zip'),
            );
			echo form_input($data); ?>
		</dd>
		<dd >
          <span id="spanZip" class="msg"><?php echo form_error('zip'); ?></span>
    </dd>
	</dl>

	<?php
	echo form_fieldset_close(); 
	echo form_submit('cmdSubmit', 'Add User');
	echo form_close();
	?>
	</section>
</article>