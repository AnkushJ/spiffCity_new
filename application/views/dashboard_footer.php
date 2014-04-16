  <footer>
			<p>
				<span style="text-align:left;float:left">&copy; 2014-2015
          <a target="_blank" href="http://getspiffed.com">Get Spiffed, Inc. </a> all rights reserved
        </span>
      </p>
	</footer>
  
    <script src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url();?>public/js/jquery-ui-1.10.4.custom.min.js"></script> 
    <script src="<?php echo base_url();?>assets/dashboard/js/masonry.pkgd.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/bootstrap.js"></script>    
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/excanvas.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.flot.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.flot.pie.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.flot.resize.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.chosen.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.uniform.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.cleditor.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.noty.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.elfinder.min.js"></script>
		
    <script src="<?php echo base_url();?>assets/js/jquery.raty.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.uploadify-3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.gritter.min.js"></script>
		
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.imagesloaded.js"></script>
		
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.knob.js"></script>
		
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/flexslider.js"></script>
    <script src="<?php echo base_url();?>assets/js/fancybox.js"></script>
		
<!--    <script src="assets/dashboard/js/chosen.jquery.js"></script>    -->
    <script src="<?php echo base_url();?>assets/js/jquery.fs.picker.js" type="text/javascript"> </script>   
    <script src="<?php echo base_url();?>assets/js/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validationEngine.js"></script>
    <script src="<?php echo base_url();?>assets/js/pwstrength.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.wookmark.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-modalmanager.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.pageslide.min.js"></script>
		
		<script src="<?php echo base_url();?>assets/js/jquery.cslider.js"></script>
		<script src="<?php echo base_url();?>assets/js/isotope.js"></script>
		<script src="<?php echo base_url();?>assets/dashboard/js/custom.js"></script>
		
		<script>
		$(window).load(function(){
				$('#inviteFriendsPop').modal('show');
		});unfriend
		
		$(document).ready(function(){
				$('#invite').click(function(){
						$('#friend').removeClass('active');
						$('#div_friends').addClass('hide');
						$('#invite').addClass('active');
						$('#invitation').removeClass('hide').addClass('show');
						return false;
				});
		});
		
		$(document).ready(function(){
				$('#unfriend').click(function(){
						alert('asdljfghasd');
						return false;
				});
		});
		
		
    $(document).ready(function () {
      $('#accordion a.item').click(function () {
        //slideup or hide all the Submenu
        //show the selected submenu
        $(this).siblings('ul').toggle('fast');
        //add "Over" class, so that the arrow pointing down
        $(this).addClass($(this).attr('rel') + 'Over');
        //remove all the "Over" class, so that the arrow reset to default
        $('#accordion a.item').each(function () {
          if ($(this).attr('rel')!='') {
            $(this).removeClass();
          }
        });
        return false;
      });
			
			
		//to show password strength during signup input !!
			jQuery("#frmConfirmPswd").validationEngine('attach',{binded: false});
					var options = {
						minChar: 5,
						bootstrap3: false,
					};
					jQuery("#newpassword").pwstrength(options);
					jQuery("#newpassword").blur(function () {
						"use strict";
						var options = {
							minChar: 8,
							bootstrap3: false,
							errorMessages: {
								password_too_short: "<font color='RED'>The Password is too short</font>",
								same_as_username: "Your password cannot be the same as your username"
							},
							scores: [17, 26, 40, 50],
							verdicts: ["Weak", "Normal", "Medium", "Strong", "Very Strong"],
							showVerdicts: true,
							showVerdictsInitially: false,
							raisePower: 1.4,
							//usernameField: "#username",
						};
				  });
					
					jQuery("#frmPassword").validationEngine('attach',{binded: false});
					var options = {
						minChar: 5,
						bootstrap3: false,
					};
					jQuery("#savePassword").pwstrength(options);
					jQuery("#savePassword").blur(function () {
						"use strict";
						var options = {
							minChar: 8,
							bootstrap3: false,
							errorMessages: {
								password_too_short: "<font color='RED'>The Password is too short</font>",
								same_as_username: "Your password cannot be the same as your username"
							},
							scores: [17, 26, 40, 50],
							verdicts: ["Weak", "Normal", "Medium", "Strong", "Very Strong"],
							showVerdicts: true,
							showVerdictsInitially: false,
							raisePower: 1.4,
							//usernameField: "#username",
						};
				  }); 	 
    });
  </script> 
		
		
<!--   <script>-->
<!--    $(document).ready(function(){       -->
<!--        $("#frmpassword").validationEngine('attach',{binded: false});-->
<!--        $("#frmInvitation").validationEngine('attach',{binded: false});-->
<!--        $(".second").pageslide({ direction: "right", modal: true });-->
<!--        $(document).on("click",".coupon",function(){-->
<!--          var coupon_id = $(this).data("coupon_id");-->
<!--          console.log(coupon_id);-->
<!--          $.ajax({-->
<!--            type:"POST",-->
<!--            url:"redeem/get_coupon_details",-->
<!--            data:{'coupon_id':coupon_id},-->
<!--            success:function(coupon){-->
<!--              $("#Modal-card").html(coupon);-->
<!--            }-->
<!--          });-->
<!--        });        -->
<!--      });      -->
<!--    </script>-->
<!--   <script>-->
<!--function i_m_clicked(new_des){-->
<!--window.location = new_des;-->
<!--}-->
<!--</script>-->
 
  </body>
</html>
