<body id="body">
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.html">
        <img class="logo-default" src="<?php echo base_url();?>/assest/web/images/logo.png" alt="logo"/>
        <img class="logo-white" src="<?php echo base_url();?>/assest/web/images/logo-white.png" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item ">
            <a class="nav-link" href="contact.html">Homepage</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/contactus/')">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>