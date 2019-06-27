<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<title>View Stock</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin</title>
   



    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CelestialUI Admin1_files/typicons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CelestialUI Admin1_files/vendor.bundle.base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/CelestialUI Admin1_files/style.css">
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
   
    <link rel="shortcut icon" href="http://www.urbanui.com/celestial/template/images/favicon.png">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

<style type="text/css">

.btn {
  background-color: #F1C40F;
  border: none;
  color: #873600;
  padding: 15px 50px;
  text-align: center;
  text-decoration: none;
  margin: 20px 65px;
  display: inline-block;
  font-size: 16px;
}
body {
  background-color:#1b1b29;
}

</style>
</head>
 
<body>
 
  

  <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
              <div id="theme-settings" class="settings-panel">
                        <i class="settings-close typcn typcn-delete-outline"></i>
                        <p class="settings-heading">SIDEBAR SKINS</p>

                        <div class="sidebar-bg-options" id="sidebar-light-theme">
                              <div class="img-ss rounded-circle bg-light border mr-3"></div>
                              Light
                            </div>

                            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                              Dark
                            </div>
                        <p class="settings-heading mt-2">HEADER SKINS</p>
                        </div>
              </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="d-flex sidebar-profile">
                                <div class="sidebar-profile-image">
                                  <img src="./CelestialUI Admin1_files/face29.png" alt="image">
                                  <span class="sidebar-status-indicator"></span>
                                </div>
                                
                                  <div class="sidebar-profile-name">
                                    <p class="sidebar-name">
                                      Hashini Rangala
                                    </p>
                                    <p class="sidebar-designation">
                                      Welcome
                                    </p>
                                  </div>
                </div>

                <div class="nav-search">
                          <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="search"></span>
                                </div>
                          </div>
                </div>
          <p class="sidebar-menu-title">Dashboard</p>
          <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="http://www.urbanui.com/celestial/template/demo/vertical-default-light/pages/widgets/widgets.html">
                    <span class="menu-title">View stock</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="http://www.urbanui.com/celestial/template/demo/vertical-default-light/index.html#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                     <span class="menu-title">Sales History</span>
                      </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="http://www.urbanui.com/celestial/template/demo/vertical-default-light/index.html#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                      <!-- <i class="typcn typcn-cog-outline menu-icon"></i> -->
                      <span class="menu-title">Payment History</span>
                      <!-- <i class="menu-arrow"></i> -->
                    </a>
                  </li>

                    <li class="nav-item">
                      <a class="nav-link" data-toggle="collapse" href="http://www.urbanui.com/celestial/template/demo/vertical-default-light/index.html#form-elements" aria-expanded="false" aria-controls="form-elements">
                        <span class="menu-title">Warehouse details</span>
                      </a>
                    </li>            
            
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="collapse" href="http://www.urbanui.com/celestial/template/demo/vertical-default-light/index.html#maps" aria-expanded="false" aria-controls="maps">
                        <!-- <i class="typcn typcn-map menu-icon"></i> -->
                        <span class="menu-title">Maps</span>
                        <!-- <i class="menu-arrow"></i> -->
                      </a>
                  </li>
           
          </ul>
       
        </nav>
       
<table class="table table-dark table-striped">
<thead>
  <tr style="background:#CCC">
    <th>Import No</th>
    <th>Item Id</th>
    <th>Quantity</th>
    <th>dealerID_fk</th>
    <th>date</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($data as $row)
  { ?>
  <tr>
   
        <td><?php echo $row->importNo;?></td>
        <td><?php echo $row->productID_fk;?></td>
        <td><?php echo $row->quantity;?></td>
        <td><?php echo $row->dealerID_fk;?></td>
        <td><?php echo $row->date;?></td>
        <td>
            <!-- <form method="DELETE" action = "<?php echo site_url('/admin/deleteStock/'.$row->itemCode);?>" >  -->
            <button type="submit" class="btn-md">Delete</button>
            </form>
        </td>

        <td>
          <form action = "<?php echo site_url('admin/Edit/'.$row->importNo);?>" > 
          <button type ="submit" class="btn-md">Update</button>
          </form>
      </td>
    
  </tr>
  <?php } ?>

  </tbody>
</table>
        </div>
 

</body>
</html>
