<?php
include 'inc/header.php';
?>
    
    <!-- END nav -->
	<section class="home-slider owl-carousel">

<div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
  <div class="container">
	<div class="row slider-text justify-content-center align-items-center">

	  <div class="col-md-7 col-sm-12 text-center ftco-animate">
		  <h1 class="mb-3 mt-5 bread">GS Restaurant</h1>
	
	  </div>

	</div>
  </div>
</div>
</section>



		<section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(images/about.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(images/about-1.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About</span>
	            <h2 class="mb-4">GS Restaurant</h2>
	          </div>
	          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<pc class="time">
						
						</p>
					</div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex">
    			<div class="col-md-9">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Menus/Dish</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Staffs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="15000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
          <div class="col-md-3 text-center text-md-left">
          	<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Catering Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Birthday Party</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Business Meetings</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Wedding Party</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
		<?php
					$index1 = $mon->getindex1();
					if($index1){
						while($result = $index1->fetch_assoc()){
					?>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img"  style="background-image: url(images/food/<?php echo $result['images']?>);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                <h3><?php echo $result['name_mon'] ?></h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price"><?php echo $fm->formatMoney($result['gia_mon'])?></span>
		                </div>
		              </div>
					  <?php echo $result['ghichu_mon'] ?> 
                                                <p><a href="detail.php?monid=<?php echo $result['id_mon'] ?>" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
			</div>
			</div>
			<?php
						}}
						$index = $mon->getindex();
					if($index){
						while($result = $index->fetch_assoc()){
					?>
	


        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(images/food/<?php echo $result['images']?>);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $result['name_mon'] ?></h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price"><?php echo $fm->formatMoney($result['gia_mon'])?></span>
		                </div>
		              </div>
					  <?php echo $result['ghichu_mon'] ?> 
                                                <p><a href="detail.php?monid=<?php echo $result['id_mon'] ?>" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
			</div>
			<?php
						}}
						$index3 = $mon->getindex1();
					if($index3){
						while($result = $index3->fetch_assoc()){
					?>


        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img"  style="background-image: url(images/food/<?php echo $result['images']?>);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                <h3><?php echo $result['name_mon'] ?></h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price"><?php echo $fm->formatMoney($result['gia_mon'])?></span>
		                </div>
		              </div>
					  <?php echo $result['ghichu_mon'] ?> 
                                                <p><a href="detail.php?monid=<?php echo $result['id_mon'] ?>" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
			</div>
			</div>
			<?php
						}}
			?>
        
        </div>
    	</div>
    </section>
    
		
		
    <?php
  include 'inc/footer.php';
  ?>