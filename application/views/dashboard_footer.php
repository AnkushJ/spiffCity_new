  <footer>
			<p>
				<span style="text-align:left;float:left">&copy; 2014-2015
          <a target="_blank" href="http://getspiffed.com">Get Spiffed, Inc. </a> all rights reserved
        </span>
      </p>
	</footer>
  <script>
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
    });
  </script> 
<!--    <script src="assets/js/jquery-1.7.2.min.js"></script>-->
<!--    <script src="public/js/jquery-ui-1.10.4.custom.min.js"></script> -->
<!--    <script src="assets/dashboard/js/masonry.pkgd.js"></script>-->
<!--    <script src="assets/dashboard/js/bootstrap.js"></script>    -->
<!--    <script src="assets/dashboard/js/jquery.cookie.js"></script>-->
<!--    <script src="assets/dashboard/js/fullcalendar.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.dataTables.min.js"></script>-->
<!--    <script src="assets/dashboard/js/excanvas.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.flot.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.flot.pie.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.flot.stack.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.flot.resize.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.chosen.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.uniform.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.cleditor.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.noty.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.elfinder.min.js"></script>-->
<!--    <script src="assets/js/jquery.raty.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.uploadify-3.1.min.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.gritter.min.js"></script>-->
<!--    <script src="assets/js/jquery.imagesloaded.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.knob.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.sparkline.min.js"></script>-->
<!--    <script src="assets/js/flexslider.js"></script>-->
<!--    <script src="assets/js/custom.js"></script>    -->
<!--    <script src="assets/dashboard/js/chosen.jquery.js"></script>    -->
<!--    <script src="assets/js/jquery.fs.picker.js" type="text/javascript"> </script>   -->
<!--    <script src="assets/js/jquery.validationEngine-en.js"></script>-->
<!--    <script src="assets/js/jquery.validationEngine.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.wookmark.js" type="text/javascript"></script>-->
<!--    <script src="assets/js/bootstrap-modalmanager.js"></script>-->
<!--    <script src="assets/js/bootstrap-modal.js"></script>-->
<!--    <script src="assets/dashboard/js/jquery.pageslide.min.js"></script>  -->
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
