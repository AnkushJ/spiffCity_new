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
		  'value'		=> $bannerDetailsArr[0]['title'],
		);
	
	$databannerDesc = array(
		  'name'        => 'desc',
		  'id'          => 'desc',
		  'class'		=> 'small required',
		  'value'		=> $bannerDetailsArr[0]['desc'],
		);
	
	$databannerImage = array(
		  'name'        => 'img',
		  'id'          => 'img',
			//'value'   => site_url().'public/upload/banner/'.$bannerDetailsArr[0]['img'],
		);
	
	$databannerExpDate = array(
		  'name'        => 'expiry_date',
		  'id'          => 'exp_date',
			'class'    =>  'datepicker',
			'value'       => set_value('expiry_date')
		);
	
	
	$attributes = array('id' => 'frmBanner');
	$bannerId = $bannerDetailsArr[0]['id'];
	echo form_open_multipart('admin/banner/edit/'.$bannerId,$attributes);
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
			<?php if($bannerDetailsArr[0]['img']!=''){ ?>
					 <br/><br/>
					 	<img src="<?php echo site_url().'public/upload/banner/'.$bannerDetailsArr[0]['img'];?>" width="100"/>
				<?php }  ?>
				<dd >
          <span id="spanImg" class="msg"><?php echo form_error('img'); ?></span>
				</dd>
		</dd>	
	</dl>
	
	<?php

	echo form_fieldset_close(); 
	echo form_submit('cmdSubmit', 'Update Banner');
	echo form_close();
	?>
	</section>
</article>
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>