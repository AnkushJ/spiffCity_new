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
				
		<h2 style="padding-right: 90px;">Banner</h2>
		<nav>
			<ul class="button-switch">
				<li><a class="button" href="<?php echo site_url("admin/banner/"); ?>">List Banner</a></li>
			</ul>
		</nav>
		<!--<a title="Toggle Content Block" class="content-box-minimizer" href="#" style="display: block; left: 324px;">Toggle</a>-->
	</header>

	<section>
	
	<?php
	$databannerTitle = array(
		  'name'        => 'title',
		  'id'          => 'title',
		  'class'		=> 'small required',
		  'value'       => set_value('title'),
		);
	
	$databannerDesc = array(
		  'name'        => 'desc',
		  'id'          => 'desc',
		  'class'		=> 'small required',
		  'value'       => set_value('desc'),
		);
	
	$databannerExpDate = array(
		  'name'        => 'expiry_date',
		  'id'          => 'exp_date',
			'class'    =>  'datepicker',
			'value'       => set_value('expiry_date')
		);
	
	$databannerImage = array(
		  'name'        => 'img',
		  'id'          => 'img',
			'value'       => set_value('img')
		);
	
	$attributes = array('id' => 'frmBanner');
	echo form_open_multipart('admin/banner/adds',$attributes);
	echo form_fieldset('Update Banner');
	?>
	<dl>
		<dt>
			<label>Banner Name</label>
		</dt>
		<dd>
			<?php echo form_input($databannerTitle); ?>
		</dd>
		<dd >
          <span id="spanTitle" class="msg"><?php echo form_error('title'); ?></span>
    </dd>
	</dl>

	<dl>
		<dt>
			<label>Banner Description</label>
		</dt>
		<dd>
			<?php echo form_textarea($databannerDesc); ?>
		</dd>
		<dd >
          <span id="spanDesc" class="msg"><?php echo form_error('desc'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>Banner Expiry Date</label>
		</dt>
		<dd>
			<?php echo form_input($databannerExpDate); ?>
		</dd>
		<dd >
        <span id="spanExpDate" class="msg"><?php echo form_error('expiry_date'); ?></span>
    </dd>
	</dl>	
	<dl id="imageBanner">
		<dt>
			<label>Banner Image</label>
		</dt>
		<dd>
			<?php echo form_upload($databannerImage); ?>			
		</dd>
		<dd >
          <span id="spanImg" class="msg"><?php echo form_error('img'); ?></span>
    </dd>
	</dl>
	
	<?php

	echo form_fieldset_close(); 
	echo form_submit('cmdSubmit', 'Add Banner');
	echo form_close();
	?>
	</section>
</article>
 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>