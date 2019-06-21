<!DOCTYPE html>
<html lang="eng">

<head>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" background="black">


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
          <form method="post" action="<?php echo base_url();?>admin/validation" class="p-5 bg-white">
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <h2 class="h4 text-black mb-5">Register</h2>
              </div>
            </div>

            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo set_value('user_fname');?>"/>
                <span class="text-danger"><?php echo form_error('name');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="userName">User Name</label>
                <input type="text" name="userName" class="form-control" value="<?php echo set_value('userName');?>"/>
                <span class="text-danger"><?php echo form_error('userName');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="password">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>"/>
                <span class="text-danger"><?php echo form_error('password');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="userID">User Id</label>
                <input type="text" name="userID" class="form-control" value="<?php echo set_value('userID');?>"/>
                <span class="text-danger"><?php echo form_error('userID');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="userType">User Type</label>
                <input type="text" name="userType" class="form-control" value="<?php echo set_value('userType');?>"/>
                <span class="text-danger"><?php echo form_error('userType');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo set_value('email');?>"/>
                <span class="text-danger"><?php echo form_error('email');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="address">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo set_value('address');?>"/>
                <span class="text-danger"><?php echo form_error('address');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="contactNoMobile">Mobile Number</label>
                <input type="text" name="contactNoMobile" class="form-control" value="<?php echo set_value('contactNoMobile');?>"/>
                <span class="text-danger"><?php echo form_error('contactNoMobile');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="contactNoResidential">Residential Number</label>
                <input type="text" name="contactNoResidential" class="form-control" value="<?php echo set_value('contactNoResidential');?>"/>
                <span class="text-danger"><?php echo form_error('contactNoResidential');?></span>
              </div>
            </div>
            <div class="row form-group justify-content-center">
              <div class="col-md-6">
                <input type="submit"  name="register" value="Register" class="btn btn-primary btn-md text-white">
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
  </section>



  </div> <!-- .site-wrap -->



</body>

</html>