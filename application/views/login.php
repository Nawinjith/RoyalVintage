<!DOCTYPE html>
<html lang="eng">

<head>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div class="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>








    <section class="site-section bg-light" id="contact-section" data-aos="fade">

      <div class="row justify-content-center">
        <div class="col-md-12 mb-5 align-self-center">
          <form class="p-5 bg-white" role="form" method="post" action="<?php echo base_url('Login/login_user'); ?>">
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <h2 class="h4 text-black mb-5">Login Here</h2>
              </div>
            </div>

            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">Email</label>
                <input type="text" id="fname" class="form-control" name="user_email">
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="email">Password</label>
                <input type="password" id="email" class="form-control" name="user_password" value="">
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6">
                <input type="submit" name="login" value="Login" class="btn btn-primary btn-md text-white">
              </div>
            </div>
          </form>
          <center><b>You are not registered ?</b> <br></b><a href="<?php echo base_url();?>signup">Register here</a></center>
        </div>
      </div>
  </div>
  </section>



  </div> <!-- .site-wrap -->



</body>

</html>