          <!-- partial:partials/_footer.html -->
          <footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="border-top my-3"></div>
              </div>
              <!-- <div class="col-lg-3 col-lg-3">
              	<h5 class="m-0 font-weight-600 mr-3 " style="color:#D91F26; font-weight: bold">BINDAS हिंदी न्यूज़ </h5>
                <ul class="footer-vertical-nav">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="pages/world.html">About</a></li>
                  <li><a href="pages/author.html">Contact Us</a></li>
                  <li><a href="pages/author.html">Advertise</a></li>
                </ul>
              </div> -->
              <div class="col-lg-9 col-lg-3 footer-top-news">
              	<h5 class="m-0 font-weight-600 mr-3" style="color:#D91F26; font-weight: bold">TOP NEWS </h5>
                <?php foreach($random as $data){ ?>
	              	<div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                    <a href="">
			              <div class="ml-2 mt-2 ">
			                <p class="footer-para" ><?php echo $data['sub_title']?></p>
			              </div>
                    </a>
			            </div>
                <?php } ?>  
              </div>
              <div class="col-lg-3">
              	<h5 class="m-0 font-weight-600 mr-3 " style="color:#D91F26; font-weight: bold">OTHER LINKS </h5>
                <ul class="footer-vertical-nav">
                  <?php foreach($menu1 as $data){ ?>
                  <li class="menu-title"><a href="<?php echo base_url('Main/view/').$data['id']; ?>"><?php echo $data['title']?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                   <div class="text-center mt-1 ml-2">
					<a href="#"><h5 class="logofooter"><span>Bindas</span>हिंदी न्यूज़ </h5></a>
				  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div
                  class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                >
                  <p class="font-weight-medium">
                    © 2021 @ Bindas हिंदी न्यूज़, All Rights Reserved.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>
    </div>  

    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

  <script src="<?php echo base_url('assets/frontend/assets/') ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/frontend/assets/') ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/frontend/assets/') ?>js/main.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?php echo base_url('assets/frontend/news/') ?>cdn/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/frontend/news/') ?>assets/js/acmeticker.js"></script>



  <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.my-news-ticker').AcmeTicker({
            type:'marquee',/*horizontal/horizontal/Marquee/type*/
            direction: 'left',/*up/down/left/right*/
            speed: 0.05,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
            controls: {
                toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
            }
        });
    })

</script>
  </>

	</body>
</html>