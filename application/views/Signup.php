<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">


  </head>
  <body>

<span style="background-color:red;">
  <div class="container mt-5"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row mt-5"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Please do Registration here</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('Signup/register_user'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Fullname" name="user_name" type="text">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Password" name="user_password" type="password" value="">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Your ID" name="user_id" type="text">
                              </div>
                              
                              <div class="form-group">
                                <select class="form-control" name="user_type" type="text">
                                  <option>Select user type</option>
                                  <option>Customer</option>
                                  <option>Addmin</option>
                                  <option>Shop</option>
                                </select>
                              </div>
                              
                              <div class="form-group">
                                <input class="form-control" placeholder="Please enter E-mail" name="user_email" type="text" autofocus>
                              </div>
                              
                              <div class="form-group">
                                  <input class="form-control" placeholder="Please address" name="user_address" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter Mobile No" name="user_mobile" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter Residential Tel" name="user_residential" type="text" autofocus>
                              </div>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >

                          </fieldset>
                      </form>
                      <center><b>You have Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>"> Please Login</a></center><!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




  </body>
</html>