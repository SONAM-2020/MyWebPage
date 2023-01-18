
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?> 
<body class="">
  <?php $this->load->view('web/includes/nevagation.php'); ?> 
  <div id="mainpublicContent">
    <?php $this->load->view('web/includes/slider.php'); ?> 
    <?php $this->load->view('web/includes/newAnnouncement.php'); ?> 
  </div>
 <?php  $this->load->view('web/includes/footer.php'); ?>
</body>
