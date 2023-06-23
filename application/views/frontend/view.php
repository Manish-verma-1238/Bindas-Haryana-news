<div class="container">
    <?php foreach($details as $data){} ?>
        <div class="row">
	        <div class="col-sm-12 mt-5">
	            <div class="d-flex position-relative  float-left">
	                <h3 class="section-title"><?php echo $data['title']; ?></h3>
	            </div>
	            <div class="float-right">
                    <p style=""><a href="<?php echo base_url() ?>"> Home</a> / <?php echo $data['title']; ?></p>
	            </div>
	        </div>
	    </div>
        <hr>

        <div class="row">
             <?php foreach($details as $data){ ?> 
              	<div class="col-lg-3 col-sm-6 grid-margin "> 
	                <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">   
	                	<div class="">
	                		<div class="position-relative image-hover image mt-1 container-image">
			                <img
			                    src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>"
			                    class="img-fluid "
			                    alt="world-news"
			                  />
			                </div>
			                <p class="font-weight-bold p-2 container-para"  style="font-size: 13px; color: black;">
                      <?php echo $data['sub_title'];?>
			                </p>
	                	</div>
	                </a>  
              	</div>
              <?php } ?>                	
         </div>

        <hr>


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

	            </div>      
          </div>



</div>        