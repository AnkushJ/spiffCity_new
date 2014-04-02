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
				
		<h2 style="padding-right: 90px;">Points</h2>
		<nav>
			<ul class="button-switch">
				<li><a class="button" href="<?php echo site_url("admin/points/"); ?>">List Points</a></li>
			</ul>
		</nav>
		<!--<a title="Toggle Content Block" class="content-box-minimizer" href="#" style="display: block; left: 324px;">Toggle</a>-->
	</header>

	<section>
	
	<?php
	$datapointsTitle = array(
		  'name'        => 'title',
		  'id'          => 'title',
		  'class'		=> 'small required',
		  'value'       => set_value('title'),
		);
	
	$datapointsValue = array(
		  'name'        => 'value',
		  'id'          => 'value',
		  'class'		=> 'small required',
		  'value'       => set_value('value'),
		);
	
	$datapointsSpiffPoints = array(
		  'name'        => 'spiff_points',
		  'id'          => 'spiff_points',
			'value'       => set_value('spiff_points')
		);
	
	$attributes = array('id' => 'frmPoints');
	echo form_open_multipart('admin/points/adds',$attributes);
	echo form_fieldset('Update Points');
	?>
	<dl>
		<dt>
			<label>Points Name</label>
		</dt>
		<dd>
			<?php echo form_input($datapointsTitle); ?>
		</dd>
		<dd >
          <span id="spanTitle" class="msg"><?php echo form_error('title'); ?></span>
    </dd>
	</dl>

	<dl>
		<dt>
			<label>Points Value</label>
		</dt>
		<dd>
			<?php echo form_textarea($datapointsValue); ?>
		</dd>
		<dd >
          <span id="spanValue" class="msg"><?php echo form_error('value'); ?></span>
    </dd>
	</dl>
	
	<dl>
		<dt>
			<label>Spiff Points</label>
		</dt>
		<dd>
			<?php echo form_input($datapointsSpiffPoints); ?>
		</dd>
		<dd >
          <span id="spanSpiff" class="msg"><?php echo form_error('spiff_points'); ?></span>
    </dd>
	</dl>	
	<?php

	echo form_fieldset_close(); 
	echo form_submit('cmdSubmit', 'Update Points');
	echo form_close();
	?>
	</section>
</article>