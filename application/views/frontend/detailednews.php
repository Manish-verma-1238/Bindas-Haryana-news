<?php foreach($details as $data){} ?>

<div class="container">
        <div class="row">
	        <div class="col-sm-12 mt-5">
	            <div class="d-flex position-relative  float-left">
	                <h3 class="section-title"><?php echo $data['title']; ?></h3>
	            </div>
	            <div class="float-right">
                    <p style=""><a href=" "> Home</a> / <?php echo $data['title']; ?></p>
	            </div>
	        </div>
	    </div>
        <hr>

    <div class="row">
        <div class="col-lg-9">
        <h3 style="font-weight:bold; "><?php echo $data['sub_title']; ?></h3>
        <div class="detailed">
        <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" >
        </div>
        <p class="mb-0" style="font-size:13px;">By <?php echo ucfirst($data['author']) ?>, अपडेटेड (<?php echo $data['date'] ?>)</p>
        <!-- <p class="mb-0"  style="font-weight:500 font-size:13px;">()</p> -->
        <hr>
        <h5 class="mt-3 news-detail" ><?php echo $data['description']; ?></h5>
        </div>

        <div class="col-lg-3">
            <div class="row">
                <?php foreach($category4 as $data){ ?>
                <div class="box mb-3">
                <a href="<?php echo base_url('Main/detailed/').$data['id']; ?>">    
                <h3 class="heading" style="font-weight:bold; font-size:18px;"><?php echo $data['sub_title']; ?></h3>
                <div class="detailed-small">
                <img src="<?php echo base_url('upload/sub_category/'); ?><?php echo $data['image']; ?>" class="img-fluid">
                </div>
                <p class="heading-para" style="font-size:14px;"><?php echo $data['description']; ?></p>
                </a>
                </div> 
                <?php } ?> 

            </div>
        </div>
    </div>

    <div class="world-news mt-5">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Other Latest News</h3>
                </div>
                <div class="float-right">
                  <!-- <a href=""><p class='pr-4' style="color:#D91F26; font-weight:bold">और भी</p></a> -->
                </div>
              </div>
            </div>

            
            <div class="row">
             <?php foreach($category1 as $data){ ?> 
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
      </div>
    </div>
</div>