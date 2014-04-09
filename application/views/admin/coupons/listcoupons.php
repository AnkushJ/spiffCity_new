<script>
 $(document).ready(function() { 
 	$('#mysubmit').click(function(){
 		if(confirm('Do you want to Delete?')){ $('#frmlistcoupons').submit(); }
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
		<h2 style="padding-right: 90px;">Coupons</h2>
		<nav>
			<ul class="button-switch">
				<li><a class="button" href="<?php echo site_url("admin/coupons/adds"); ?>">Add Coupons</a></li>
			</ul>
		</nav>
		<!--<a title="Toggle Content Block" class="content-box-minimizer" href="#" style="display: block; left: 115px;">Toggle</a>-->
	</header>
	<section>
		<div class="dataTables_wrapper">
		<form name="frmlistcoupons" id="frmlistcoupons" method="post">
		<table class="datatable">
			<thead class="trclass" border="1">
			<tr>
				<th width="5%">Sr No.</th>
				<th width="10" style="text-align:left;padding-left:10px;">Title</th>
				<th width="10%" style="text-align:left;">Image</th>
				<th width="20%" style="text-align:left;">Description</th>
				<th width="5%" style="text-align:left;">Points</th>
				<th width="5%" style="text-align:left;">Price</th>
				<th width="5%" style="text-align:left;">Likes</th>
				<th width="10%" style="text-align:left;">Expiry Date</th>
				<th width="10%" style="text-align:left;">Created Date</th>
				<th width="10%" style="text-align:left;">Modified Date</th>
				<th width="5%">Edit</th>
				<th width="5%">Delete</th>
			</tr>
			</thead>
		<tbody>
		<?php 
		$i = 1;
		if(isset($couponsDetails)){
			foreach($couponsDetails as $coupons){	
			$class = "gradeA odd";
			if($i % 2 == 0){
				$class = "gradeA even";
			}
			?>
			<tr class="<?php echo $class; ?>">
				<td style="width: 5%;text-align:left;vertical-align:top;padding-left:18px;"><?php echo $i ?></td>
				<td style="width: 7%;text-align:left;vertical-align:top;"><?php echo $coupons['title']?></td>
				<td style="width: 11%;text-align:left;vertical-align:top;">
					<?php if($coupons['img']!=''){ ?>
						<img src="<?php echo site_url().'public/upload/coupons/'.$coupons['img'];?>" width="100"/>
					<?php }
					 else{
					?>
					 <img src="<?php echo site_url().'public/images/no-image.jpg';?>" width="100"/>
					 <?php
							}
					 ?>
				</td>
				<td style="width: 22%;text-align:left;vertical-align:top;"><?php echo $coupons['description']?></td>
				<td style="width: 5%;text-align:left;vertical-align:top;"><?php echo $coupons['points']?></td>
				<td style="width: 5%;text-align:left;vertical-align:top;"><?php echo $coupons['Price']?></td>
				<td style="width: 5%;text-align:left;vertical-align:top;"><?php echo $coupons['likes']?></td>
				<td style="width: 10%;text-align:left;vertical-align:top;"><?php echo $coupons['expiry_date']?></td>
				<td style="width: 10%;text-align:left;vertical-align:top;"><?php echo $coupons['created_date']?></td>
				<td style="width: 10%;text-align:left;vertical-align:top;"><?php echo $coupons['modified_date']?></td>
				<td style="width: 5%;vertical-align:top;"><a href="<?php echo site_url("admin/coupons/edit/".$coupons['id']); ?>"><img alt="Pencil" src="<?php echo base_url(); ?>/public/admin/img/icons/buttons/pencil.png"></a></td>
			  <td style="width: 5%;vertical-align:top;"><a href="#" onclick="javascript: deleteConfirm('<?php echo site_url("admin/coupons/delete/".$coupons['id']); ?>');"><img alt="Trashcan" src="<?php echo base_url(); ?>public/admin/img/icons/buttons/trashcan.png"></a></td>
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