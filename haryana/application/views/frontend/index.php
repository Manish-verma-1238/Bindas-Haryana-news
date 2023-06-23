
<div class="container">
      
		<div class="acme-news-ticker mt-3">
		<div class="acme-news-ticker-label d-none d-sm-block ">Breaking News</div>
		<div class="acme-news-ticker-box">
			<ul class="my-news-ticker">
			<?php foreach($category4 as $data){ ?>
			<li class="mr-5">
				<a href="<?php echo base_url('Main/detailed/').$data['id']; ?>"><?php echo $data['sub_title'];?></a>
			</li>
			<?php } ?>
			</ul>
		</div>
		<div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
        	<button class="acme-news-ticker-pause"></button>
    	</div>
		</div>

      <div class="row">
      	<div class="col-lg-6 mt-4 d-none d-sm-block d-md-none d-block d-sm-none">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner carousel-div">

            <?php foreach($category1 as $data){ ?>
              <div class="carousel-item active contain">
                <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" class="d-block w-100 contain-img" alt="...">
                <div class="carousel-caption">
                  <h4><?php echo $data['sub_title'];?></h4>
                </div>
              </div>
            <?php } ?>  

            </div>
          </div>
        </div> 




        <div class="col-lg-3 left mt-4 first">
          <h4 class="ml-3 mt-2" style="font-weight: 600"><span></span> ताज़ा खबरें .....</h4>

            <?php foreach($category as $data){ ?>
            <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
              <div class="ml-2 mt-2 para-left">
              <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">
                <p class="small-para-left" ><?php echo $data['sub_title']; ?></p>
                </a>
              </div>
            </div>
            <?php } ?> 

        </div>  
        <div class="col-lg-6 mt-4 d-none d-md-block d-lg-block d-xl-block">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner carousel-div">

            <?php foreach($category1 as $data){ ?>
              <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">
              <div class="carousel-item active contain">
                <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" class="d-block w-100 contain-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h4><?php echo $data['sub_title'];?></h4>
                </div>
              </div>
              </a>
            <?php } ?>  

            </div>
          </div>
        </div>

        <div class="col-lg-3 mt-4 upper-right" >
          <?php foreach($category2 as $data){ ?>
          <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">
          <div class="d-flex justify-content-between align-items-center small-main">
            <div class="d-flex justify-content-between align-items-center pb-2">
              <div class="div-w-80 mr-3">
                <div class="rotate-img">
                  <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" width="80" height="60">
                </div>
              </div>
              <div class="ml-0 para">
                <p class="small-para" ><?php echo $data['sub_title'];?></p>
              </div>
            </div>             
          </div>
          </a>
          <?php }?>

        </div>
      </div>

      <div class="world-news mt-5">
		  <?php foreach($india as $data){} ?>
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title"><?php echo $data['title'] ?></h3>
                </div>
                <div class="float-right">
                  <a href="<?php echo base_url('Main/view/').$data['category_id']; ?>"><p class='pr-4' style="color:#D91F26; font-weight:bold">और भी</p></a>
                </div>
              </div>
            </div>

            
            <div class="row">
             <?php foreach($india as $data){ ?> 
              	<div class="col-lg-3 col-sm-6 grid-margin "> 
	                <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">   
	                	<div class="container-img ">
	                		<div class="position-relative image-hover image mt-1 container-image">
			                <img
			                    src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>"
			                    class="img-fluid "
			                    alt="world-news"
			                  />
			                </div>
			                <p class=" font-weight-bold p-2 container-para">
                      <?php echo $data['sub_title'];?>
			                </p>
	                	</div>
	                </a>  
              	</div>
              <?php } ?>                	
            </div>
      </div>

            <div class="videos mt-5">
	            <div class="row">
	              <div class="col-sm-9">
	                <div class="d-flex position-relative  float-left">
	                  <h3 class="section-title">Videos</h3>
	                </div>
	                <!-- <div class="float-right">
	                  <a href=""><p class='pr-4' style="color:#D91F26; font-weight:bold">और भी</p></a>
	                </div> -->
	              </div>
	            </div>

	            <div class="row">
	            	<div class="col-lg-8" >
	            		<div class="row">
	            			<?php foreach($videos as $data){ ?>
		            		<div class="col-lg-6 video-section" >
		            			<div class="position-relative">
	                              <div class="rotate-img">
	                              	<iframe width="100%" height="210" src="<?php echo $data['video']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                              </div>
	                            </div>
		            		</div>
							<?php } ?>
	            		</div>
	            	</div>

	            	<div class="col-lg-4 video-right" style="border: 2px solid #fff;">
                <?php foreach($bollywood as $data){ ?>
	            		<div class="d-flex justify-content-between align-items-center right-video" >
                  <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">
				            <div class="d-flex justify-content-between border-bottom align-items-center pb-2">
				              <div class="div-w-80 mr-3 mt-2">
				                <div class="rotate-img">
				                  <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" width="100" height="60">
				                </div>
				              </div>
				              <div class="ml-0 para-videos">
				                <p class="small-para-videos" ><?php echo $data['sub_title']; ?></p>
				              </div>
				            </div>  
                    </a>           
				          </div>
                <?php } ?>

	            	</div>
	            </div>
	        </div>

	        <div class="videos mt-5">
	            <div class="row">
				<?php foreach($world as $data){} ?>
	              <div class="col-sm-12">
	                <div class="d-flex position-relative  float-left">
	                  <h3 class="section-title"><?php echo $data['title'] ?></h3>
	                </div>
	                <div class="float-right">
	                  <a href="<?php echo base_url('Main/view/').$data['category_id']; ?>"><p class='pr-4' style="color:#D91F26; font-weight:bold">और भी</p></a>
	                </div>
	              </div>
	            </div> 

	            <div class="row">
	            	<div class="col-lg-5  mb-5 mb-sm-2 ">
	            		<div class="row">
                    <?php foreach($world as $data){ ?>
	            			<div class="col-lg-12 big-image bigger">
	            				<div class="position-relative image-hover set-height">
				                  <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">  
				                  <img
				                    src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>"
				                    class="img"
				                    alt="world-news"
				                  />
				                </div>
			                    <h3 class="font-weight-600 mt-3 big-image-para">
			                      <?php echo $data['sub_title']; ?>
			                    </h3>
			                     </a>
	            			</div>
                    <?php } ?>
	  
	            		</div>
	              </div>

	              <div class="col-lg-7  mb-5 mb-sm-2">
	                <div class="row">
						<div class="section-news">
							<div class="row">
                  <?php foreach($world1 as $data){ ?>
		                  <div class="col-sm-4  mb-5 mb-sm-2 bigger">
		                  	<div class="big-image-right">
		                  		<div class="position-relative image-hover set-height-smaller">
		                      <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">  
		                      <img
		                        src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>"
		                        class="img-fluid"
		                        alt="world-news"
		                      />
		                    </div>
		                    <h5 class=" big-image-right-para" style="font-size:14px;">
                        <?php echo $data['sub_title']; ?>
		                    </h5>
		                  	</div>
		                  </a>
		                  </div>
                  <?php } ?> 
				  </div>
				  </div>   

	                </div>
	              </div>
	            </div>
	        </div> 

          <div class="editor mt-5">
	            <div class="row">
				<?php foreach($editor as $data){} ?>
	              <div class="col-sm-12">
	                <div class="d-flex position-relative  float-left">
	                  <h3 class="section-title"><?php echo $data['title'] ?></h3>
	                </div>
	                <div class="float-right">
	                  <a href="<?php echo base_url('Main/view/').$data['category_id']; ?>"><p class='pr-4' style="color:#D91F26; font-weight:bold">और भी</p></a>
	                </div>
	              </div>
	            </div> 

	            <div class="row">
	            	<div class="col-lg-4" >
	            		<div class="row">
                  <?php foreach($editor as $data){ ?>
	            			 <div class="d-flex justify-content-between align-items-center m-2 ">
                      <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>"> 
					            <div class="d-flex justify-content-between border-bottom align-items-center pb-2">
					              <div class="div-w-80 mr-3">
					                <div class="rotate-img ">
					                  <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" width="180" height="100">
					                </div>
					              </div>
					              <div class="">
					                <p class="other-para" > <?php echo $data['sub_title']; ?></p>
					              </div>
					            </div> 
                      </a>
					          </div> 
                    <?php } ?>
					                
				        </div> 
	            	</div>

	            	<div class="col-lg-4" >
                <?php foreach($editor1 as $data){ ?>
	            		<div class="d-flex justify-content-between align-items-center m-2 ">
                  <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">
					            <div class="d-flex justify-content-between border-bottom align-items-center pb-2">
					              <div class="div-w-80 mr-3">
					                <div class="rotate-img">
					                  <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" width="80" height="60">
					                </div>
					              </div>
					              <div class="<?php echo base_url('Main/detailed/').$data['id']; ?>">
					                <p class="other-para-small" ><?php echo $data['sub_title']; ?></p>
					              </div>
					            </div> 
                      </a>
					        </div>
                <?php } ?>  
                
	            	</div>

                <div class="col-lg-4" >
                <?php foreach($editor2 as $data){ ?>
	            		<div class="d-flex justify-content-between align-items-center m-2 ">
                  <a href="<?php echo base_url('main/detailed/').$data['id']; ?>">
					            <div class="d-flex justify-content-between border-bottom align-items-center pb-2">
					              <div class="div-w-80 mr-3">
					                <div class="rotate-img">
					                  <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" width="80" height="60">
					                </div>
					              </div>
					              <div class="<?php echo base_url('Main/detailed/').$data['id']; ?>">
					                <p class="other-para-small" ><?php echo $data['sub_title']; ?></p>
					              </div>
					            </div> 
                      </a>
					        </div>
                <?php } ?>  
                
	            	</div>

	            </div>      
          </div>

		  <div class="editor mt-5">
	            <div class="row">
				<?php foreach($sports as $data){} ?>
	              <div class="col-sm-12">
	                <div class="d-flex position-relative  float-left">
	                  <h3 class="section-title"><?php echo $data['title'] ?></h3>
	                </div>
	                <div class="float-right">
	                  <a href="<?php echo base_url('Main/view/').$data['category_id']; ?>"><p class='pr-4' style="color:#D91F26; font-weight:bold">और भी</p></a>
	                </div>
	              </div>
	            </div> 

	            <div class="row">
	            	<div class="col-lg-4" >
	            		<div class="row">
                  <?php foreach($sports as $data){ ?>
	            			 <div class="d-flex justify-content-between align-items-center m-2 ">
                      <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>"> 
					            <div class="d-flex justify-content-between border-bottom align-items-center pb-2">
					              <div class="div-w-80 mr-3">
					                <div class="rotate-img ">
					                  <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" width="180" height="100">
					                </div>
					              </div>
					              <div class="">
					                <p class="other-para" > <?php echo $data['sub_title']; ?></p>
					              </div>
					            </div> 
                      </a>
					          </div> 
                    <?php } ?>
					                
				        </div> 
	            	</div>

	            	<div class="col-lg-4" >
                <?php foreach($sports1 as $data){ ?>
	            		<div class="d-flex justify-content-between align-items-center m-2 ">
                  <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">
					            <div class="d-flex justify-content-between border-bottom align-items-center pb-2">
					              <div class="div-w-80 mr-3">
					                <div class="rotate-img">
					                  <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" width="80" height="60">
					                </div>
					              </div>
					              <div class="<?php echo base_url('Main/detailed/').$data['id']; ?>">
					                <p class="other-para-small" ><?php echo $data['sub_title']; ?></p>
					              </div>
					            </div> 
                      </a>
					        </div>
                <?php } ?>  
                
	            	</div>

                <div class="col-lg-4" >
                <?php foreach($sports2 as $data){ ?>
	            		<div class="d-flex justify-content-between align-items-center m-2 ">
                  <a href="<?php echo base_url('main/detailed/').$data['id']; ?>">
					            <div class="d-flex justify-content-between border-bottom align-items-center pb-2">
					              <div class="div-w-80 mr-3">
					                <div class="rotate-img">
					                  <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" width="80" height="60">
					                </div>
					              </div>
					              <div class="<?php echo base_url('Main/detailed/').$data['id']; ?>">
					                <p class="other-para-small" ><?php echo $data['sub_title']; ?></p>
					              </div>
					            </div> 
                      </a>
					        </div>
                <?php } ?>  
                
	            	</div>

	            </div>      
          </div>