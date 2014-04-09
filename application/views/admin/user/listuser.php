<!-- <link href="<?php echo base_url(); ?>public/css/nyroModal.css" type="text/css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>public/js/jquery.nyroModal.js" type="text/javascript"></script>

<script type="text/javascript">
	//$(document).ready(function(){ 
	$(function() {
	  $('.nyroModal').nyroModal();
	});
</script> -->
<script>
 $(document).ready(function() { 
 	$('#mysubmit').click(function(){
 		if(confirm('Do you want to Delete?')){ $('#frmlistcountry').submit(); }
 	})
 })
 function deleteConfirm(url)
 {
 	if(confirm('Do you want to Delete?'))
 	{
 		window.location.href=url;
 	}
 }
</script>
<?php
	if ($this->session->flashdata('success')){ 
	?>
	<div class="notification success">
			<a title="Hide Notification" class="close-notification tooltip" href="#">x</a>
			<h4>Success</h4>
			<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
	<?php
	}
	if ($this->session->flashdata('error')){ 
	?>
	<div class="notification error">
			<a title="Hide Notification" class="close-notification tooltip" href="#">x</a>
			<h4>Error</h4>
			<p><?php echo $this->session->flashdata('error') ?></p>
	</div>
	<?php
	}
?>


<article class="content-box minimizer">
	<header>
		<h2 style="padding-right: 90px;">User</h2>
		<nav>
			<ul class="button-switch">
				<li><a class="button" href="<?php echo site_url("admin/user/add"); ?>">Add user</a></li>
			</ul>
		</nav>
		<!--<a title="Toggle Content Block" class="content-box-minimizer" href="#" style="display: block; left: 324px;">Toggle</a>-->
	</header>
	<section>
		<div class="dataTables_wrapper">
		<form name="frmlistuser" id="frmlistuser" method="post">
		<table class="datatable">
			<thead class="trclass" border="1">
			<tr>
				<th width="6%" style="text-align:left;padding-left:10px;">Sr No.</th>
				<th width="10%" style="text-align:left;">User ID</th>
				<th width="15%" style="text-align:left;">Name</th>
				<th width="20%" style="text-align:left;">Email</th>
				<th width="10%" style="text-align:left;">D.O.B</th>
				<th width="5%" style="text-align:left;">Zip Code</th>
				<th style="text-align:left;" width="10%">Created On</th>
				<th style="text-align:left;" width="10%">Modified on</th>
				<th width="5%" class="tdclass">Edit</th>
				<th width="5%" class="tdclass">Delete</th>
			</tr>
			</thead>
	
			<tfoot>
			<tr>
				<th style="text-align:left;padding-left:10px;">Sr No.</th>
				<th style="text-align:left;">User ID</th>
				<th style="text-align:left;">Name</th>
				<th style="text-align:left;">Email</th>
				<th style="text-align:left;">D.O.B</th>
				<th style="text-align:left;">Zip Code</th>
				<th style="text-align:left;">Created On</th>
				<th style="text-align:left;">Modified On</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			</tfoot>
		<tbody>
		<?php 
		$i = 1;
		if($userDetails){
			foreach($userDetails as $user){	
			$class = "gradeA odd";
			if($i % 2 == 0){
				$class = "gradeA even";
			}
			?>
			<tr class="<?php echo $class; ?>">
				<td width="6%" style="text-align:left;vertical-align:top;padding-left:10px;"><?php echo $i;?></td>
				<td width="10%" style="text-align:left;vertical-align:top;"><?php echo $user['userid']?></td>
				<td width="12%" style="text-align:left;vertical-align:top;"><?php echo $user['first_name'] ." ". $user['last_name']; ?></td>
				<td width="17%" style="text-align:left;vertical-align:top;"><?php echo $user['email']; ?></td>
				<td width="10%" style="text-align:left;vertical-align:top;"><?php echo $user['dob']; ?></td>
				<td width="10%" style="text-align:left;vertical-align:top;"><?php echo $user['zip_code']; ?></td>
				<td width="12%" style="text-align:left;vertical-align:top;"><?php echo $user['created_date']; ?></td>
				<td width="10%" style="text-align:left;vertical-align:top;"><?php echo $user['modified_date']; ?></td>
				<td width="5%"><a href="<?php echo site_url('admin/user/edit/'.$user['id']); ?>"><img alt="Pencil" src="<?php echo base_url(); ?>public/admin/img/icons/buttons/pencil.png"></a></td>
			  <td width="5%"><a href="#" onclick="javascript: deleteConfirm('<?php echo site_url("admin/user/delete/".$user['id']); ?>');"><img alt="Pencil" src="<?php echo base_url(); ?>public/admin/img/icons/buttons/trashcan.png"></a></td>
			</tr>
			<?php
			$i++;
			}
		}
		else
		{?> 
			<tr>
				<td colspan="5" align="center">No Data Found</td>
			</tr>
		<?php }
		?>
		</tbody>
		</table>
		</form>
		</div>
	</section>
</article>