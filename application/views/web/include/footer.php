<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Our Services</h3></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Quick Links</h3></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Connect with us Socially</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Pinterest</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2016. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">Themefisher</a></h6>
  </div>
</footer> 
    <script src="<?php echo base_url();?>/assest/web/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assest/web/https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script  src="<?php echo base_url();?>/assest/web/plugins/google-map/gmap.js"></script>
    <script src="<?php echo base_url();?>/assest/web/plugins/form-validation/jquery.form.js"></script> 
    <script src="<?php echo base_url();?>/assest/web/plugins/form-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>/assest/web/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assest/web/plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url();?>/assest/web/plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <script src="<?php echo base_url();?>/assest/web/plugins/slick/slick.min.js"></script>
    <script src="<?php echo base_url();?>/assest/web/plugins/filterizr/jquery.filterizr.min.js"></script>
    <script src="<?php echo base_url();?>/assest/web/plugins/smooth-scroll/smooth-scroll.min.js"></script>
    <script src="<?php echo base_url();?>/assest/web/js/script.js"></script>
    <script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>

    <script type="text/javascript">
      function loadpage(url,id){
    $.blockUI
        ({ 
          css: 
          { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
          } 
        });
      $("#mainpublicContent").load(url);
      setTimeout($.unblockUI, 1000);
      
    }
    </script>
</body>
</html>