
<!DOCTYPE html>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2 main-menu-span">
			<div class="nav-collapse sidebar-nav">
				<ul class="nav nav-tabs nav-stacked main-menu">
					<li><a href="<?php echo base_url();?>popular"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Home</span></a></li>
					<li><a href="<?php echo base_url();?>dashboard"><i class="icon-dashboard icon-white"></i><span class="hidden-tablet"> DashBoard</span></a></li>
					<li><a href="<?php echo base_url();?>profile"><i class="icon-user icon-white"></i><span class="hidden-tablet"> My Account</span></a></li>
					<li><a href="<?php echo base_url();?>friends"><i class="icon-globe icon-white"></i><span class="hidden-tablet"> Friends</span></a></li>
					<li><a href="invite.html"><i class="icon-bullhorn icon-white"></i><span class="hidden-tablet"> Invite Friends</span></a></li> 
					<li><a href="activities.html"><i class="icon-tasks icon-white"></i><span class="hidden-tablet"> Activities</span></a></li>
					<li class="active"><a href="redeem.html"><i class="icon-tags icon-white"></i><span class="hidden-tablet"> Redeem</span></a></li>
				</ul>
			</div>
		</div>
		<noscript>
			&lt;div class="alert alert-block span10"&gt;
			&lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
			&lt;p&gt;You need to have &lt;a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"&gt;JavaScript&lt;/a&gt; enabled to use this site.&lt;/p&gt;
			&lt;/div&gt;
		</noscript>
		<div id="content" class="span10" style="min-height: 465px;">
			<div class="row breadrump-block">
				<hr>
				<div class="span8">
					<ul class="breadcrumb">
						<li>
							<a href="<?php echo base_url();?>popular">
								Home
							</a>
							<span class="divider">
								/
							</span>
						</li>
						<li>
							<a href="#">
								Redeem
							</a>
						</li>                   
					</ul>
				</div>
				<div class="span3">
					<form class="form-search">
						<div class="input-append">
							<input type="text" placeholder="Find apps, people, offers" class="input-large search-query" id="appendedInputButton">
							<button type="button" class="btn">
								<i class="icon-search"></i>
							</button>
						</div>
					</form>
				</div>
				<hr>
      </div>
      <div class="container offer-tabnav">
        <ul class="nav nav-tabs">
          <li class="active"><a id="giftcardtab-btn" data-toggle="tab" href="#giftcard"> <i class="icon-shopping-cart"></i> Gift Cards</a></li>
          <!--<li><a id="offerstab-btn" data-toggle="tab" href="#offers"><i class="icon-tags"></i> Offers</a></li>-->
        </ul>
      </div>
      <div class="row-fluid">
        <div class="span12 ">
          <div class="offer-tabs">
            <div class="tab-content">
                <!-- start: Gift card Container -->
              <div id="giftcard" class="tab-pane active">
                <!--<div id="filters">-->
                <!--  <ul data-option-key="filter" class="option-set">-->
                <!--    <li><a data-option-value="*" class="selected" href="#filter">All</a></li>-->
                <!--    <li><a data-option-value=".physical" href="#filter">Physical</a></li>-->
                <!--    <li><a data-option-value=".ecode" href="#filter">eCode</a></li>-->
                <!--  </ul>-->
                <!--</div>-->
                <div class="row-fluid" id="portfolio-wrapper" >
                  <?php
                    foreach($coupons_data as $coupon){
                  ?>
                    <div class="span2 portfolio-item">
                      <div class="picture">
                        <a title="Aeropostale" href="giftcard_details.html">
                          <img alt="Aeropostale" src="<?php echo base_url(); ?>assets/img/<?php echo $coupon['img'] ?>">
                          <div class="image-overlay-link"></div>
                        </a>
                        <div class="item-description alt">
                          <h5><a href="giftcard_details.html">Aeropostale</a></h5>
                          <span class="rewardvalue ">$<?php echo $coupon['Price'] ?> </span> </div>
                        <div class="post-meta clearfix"> <span class="thumb-rating">
                          <div class="btn-group ">
                            <a href="#" class="btn btn-mini">
                              <i class="icon-thumbs-up icon-black"></i><?php echo $coupon['likes'] ?> 
                            </a>
                          </div>
                          <span class="card-comments"><i class="mini-ico-comment"></i>
                            <a href="#">0 comments</a>
                          </span>
                        </div>
                      </div>
                    </div>
                  <?php
                    }
                  ?>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div id="myModal"  class="modal hide fadecrowd_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      </div>
      <div class="container"> </div>
    </div>
	</div>
</div>