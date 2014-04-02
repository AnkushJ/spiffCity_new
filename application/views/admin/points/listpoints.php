<script>
 $(document).ready(function() { 
 	$('#mysubmit').click(function(){
 		if(confirm('Do you want to Delete?')){ $('#frmlistpoints').submit(); }
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
?>
<article class="content-box minimizer">
	<header>
		<h2 style="padding-right: 90px;">Points</h2>
		<nav>
			<ul class="button-switch">
				<li><a class="button" href="<?php echo site_url("admin/points/adds"); ?>">Add Points</a></li>
			</ul>
		</nav>
		<!--<a title="Toggle Content Block" class="content-box-minimizer" href="#" style="display: block; left: 115px;">Toggle</a>-->
	</header>
	<section>
		<div class="dataTables_wrapper">
		<form name="frmlistpoints" id="frmlistpoints" method="post">
		<table class="datatable">
			<thead class="trclass" border="1">
			<tr>
				<th width="4%">Sr No.</th>
				<th width="10" style="text-align:left;padding-left:15px;">Title</th>
				<th width="15%" style="text-align:left;">Value</th>
				<th width="15%" style="text-align:left;">Spiff Points</th>
				<th width="14%" style="text-align:left;">Created Date</th>
				<th width="14%" style="text-align:left;">Modified Date</th>
				<th width="5%">Edit</th>
				<th width="5%">Delete</th>
			</tr>
			</thead>
		<tbody>
		<?php 
		$i = 1;
		if(isset($pointsDetails)){
			foreach($pointsDetails as $points){	
			$class = "gradeA odd";
			if($i % 2 == 0){
				$class = "gradeA even";
			}
			?>
			<tr class="<?php echo $class; ?>">
				<td style="width: 4%;text-align:left;vertical-align:top;padding-left:15px;"><?php echo $i ?></td>
				<td style="width: 10%;text-align:left;vertical-align:top;"><?php echo $points['title']?></td>
				<td style="width: 15%;text-align:left;vertical-align:top;"><?php echo $points['value']?></td>
				<td style="width: 15%;text-align:left;vertical-align:top;"><?php echo $points['spiff_points']?></td>
				<td style="width: 14%;text-align:left;vertical-align:top;"><?php echo $points['created_date']?></td>
				<td style="width: 14%;text-align:left;vertical-align:top;"><?php echo $points['modified_date']?></td>
				<td style="width: 5%;vertical-align:top;"><a href="<?php echo site_url("admin/points/edit/".$points['id']); ?>"><img alt="Pencil" src="<?php echo base_url(); ?>/public/admin/img/icons/buttons/pencil.png"></a></td>
			  <td style="width: 5%;vertical-align:top;"><a href="#" onclick="javascript: deleteConfirm('<?php echo site_url("admin/points/delete/".$points['id']); ?>');"><img alt="Trashcan" src="<?php echo base_url(); ?>public/admin/img/icons/buttons/trashcan.png"></a></td>
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