<?php header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('web/include/head.php'); ?> 
  <?php $this->load->view('web/include/navbar.php'); ?> 
  <div id="mainpublicContent">
    <?php $this->load->view('web/include/slide.php'); ?> 
    <?php $this->load->view('web/include/home.php'); ?> 
  </div>
<?php  $this->load->view('web/include/footer.php'); ?>
