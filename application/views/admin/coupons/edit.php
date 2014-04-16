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
		<h2 style="padding-right: 90px;">Coupons</h2>
		<nav>
			<ul class="button-switch">
				<li><a class="button" href="<?php echo site_url("admin/coupons/"); ?>">List Coupons</a></li>
			</ul>
		</nav>
		<!--<a title="Toggle Content Block" class="content-box-minimizer" href="#" style="display: block; left: 324px;">Toggle</a>-->
	</header>

	<section>

	<?php
$datacouponsTitle = array(
		  'name'        => 'title',
		  'id'          => 'title',
		  'class'		=> 'small required',
			  'value'		=> $couponsDetailsArr[0]['title'],
		);
	
	$datacouponsImage = array(
		  'name'        => 'img',
		  'id'          => 'img',
		  'class'		=> 'small required',
		);
	
	$datacouponsDesc = array(
		  'name'        => 'desc',
		  'id'          => 'desc',
			'value'		=> $couponsDetailsArr[0]['description'],
		);
	
	$datacouponsPoints = array(
		  'name'        => 'points',
		  'id'          => 'points',
			  'value'		=> $couponsDetailsArr[0]['points'],
		);
	
	$datacouponsPrice = array(
		  'name'        => 'price',
		  'id'          => 'price',
			  'value'		=> $couponsDetailsArr[0]['Price'],
		);
	$datacouponsLikes = array(
		  'name'        => 'likes',
		  'id'          => 'likes',
			  'value'		=> $couponsDetailsArr[0]['likes'],
		);
	$datacouponsExpDate = array(
		  'name'        => 'exp_date',
		  'id'          => 'datepicker',
			'class'    => 'datepicker',
			'value'		=> $couponsDetailsArr[0]['expiry_date'],
		);
	$attributes = array('id' => 'frmCoupons');
	$couponsId = $couponsDetailsArr[0]['id'];
	echo form_open_multipart('admin/coupons/edit/'.$couponsId,$attributes);
	echo form_fieldset('Update Coupons');
	?>
	<dl>
		<dt>
			<label>Coupon Name</label>
		</dt>
		<dd>
			<?php echo form_input($datacouponsTitle); ?>
		</dd>
		<dd >
          <span id="spanTitle" class="msg"><?php echo form_error('img'); ?></span>
    </dd>
	</dl>

	<dl>
		<dt>
			<label>Coupon Image</label>
		</dt>
		<dd>
			<?php echo form_upload($datacouponsImage); ?>
		</dd>
		<dd >
          <span id="spanImage" class="msg"><?php echo form_error('img'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>Coupon Description</label>
		</dt>
		<dd>
			<?php echo form_textarea($datacouponsDesc); ?>
		</dd>
		<dd >
          <span id="spanDesc" class="msg"><?php echo form_error('desc'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>Coupon Points</label>
		</dt>
		<dd>
			<?php echo form_input($datacouponsPoints); ?>
		</dd>
		<dd >
          <span id="spanPoints" class="msg"><?php echo form_error('points'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>Coupon Price</label>
		</dt>
		<dd>
			<?php echo form_input($datacouponsPrice); ?>
		</dd>
		<dd >
          <span id="spanPrice" class="msg"><?php echo form_error('price'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>Coupon Likes</label>
		</dt>
		<dd>
			<?php echo form_input($datacouponsLikes); ?>
		</dd>
		<dd >
          <span id="spanLikes" class="msg"><?php echo form_error('likes'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>Coupon Expiry Date</label>
		</dt>
		<dd>
			<?php echo form_input($datacouponsExpDate); ?>
		</dd>
		<dd >
          <span id="spanExpDate" class="msg"><?php echo form_error('exp_date'); ?></span>
    </dd>
	</dl>	
	
	<?php

	echo form_fieldset_close(); 
	echo form_submit('cmdSubmit', 'Update Coupons');
	echo form_close();
	?>
	</section>
</article>
