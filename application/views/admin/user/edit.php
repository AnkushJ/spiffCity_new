<script type="text/javascript">
$(document).ready(function(){ // jQuery DOM ready function.
  $("#frmUser").validate();
});
</script>

<?php
	if ($this->session->flashdata('error')){ 
	?>
	<!-- Notification -->
	<div class="notification error">
		<a href="#" class="close-notification tooltip" title="Hide Notification">x</a>
		<h4>Error notification</h4>
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
	echo form_open('admin/user/edit/'.$userDetailsArr[0]['id'],$attributes);
	echo form_fieldset('Update User');


		$datauserid = array(
		  'name'        => 'userid',
		  'id'          => 'userid',
		  'class'		=> 'small required',
		  'value'		=> $userDetailsArr[0]['userid'],
		);
		$datapassword = array(
		  'name'        => 'password',
		  'id'          => 'password',
		  'class'		=> 'small required',
		  'value'		=> $userDetailsArr[0]['password'],
		);
		$datafirstname = array(
		  'name'        => 'firstname',
		  'id'          => 'firstname',
		  'class'		=> 'small required',
		  'value'		=> $userDetailsArr[0]['first_name'],
		);
		$datalastname = array(
		  'name'        => 'lastname',
		  'id'          => 'lastname',
		  'class'		=> 'small required',
		  'value'		=> $userDetailsArr[0]['last_name'],
		);
		$dataemail = array(
		  'name'        => 'email',
		  'id'          => 'email',
		  'class'		=> 'small required',
		  'value'		=> $userDetailsArr[0]['email'],
		);
		$datadob = array(
		  'name'        => 'dob',
		  'id'          => 'datepicker',
		  'class'		=> 'datepicker',
		  'value'		=> $userDetailsArr[0]['dob'],
		);
		$datazipcode = array(
		  'name'        => 'zip',
		  'id'          => 'zip',
		  'class'		=> 'small required',
		  'value'		=> $userDetailsArr[0]['zip_code'],
		);
	?>
	<dl>
		<dt>
			<label>User ID</label>
		</dt>
		<dd>
			
			<?php echo form_input($datauserid); ?>
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
			
			<?php echo form_input($datapassword); ?>
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
			
			<?php echo form_input($datafirstname); ?>
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
			
			<?php echo form_input($datalastname); ?>
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
			
			<?php echo form_input($dataemail); ?>
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
			
			<?php echo form_input($datadob); ?>
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
			
			<?php echo form_input($datazipcode); ?>
		</dd>
		<dd >
          <span id="spanZip" class="msg"><?php echo form_error('zip'); ?></span>
    </dd>
	</dl>
	<?php

	echo form_fieldset_close(); 
	echo form_submit('cmdSubmit', 'Update User');
	echo form_close();
	?>
	</section>
</article>