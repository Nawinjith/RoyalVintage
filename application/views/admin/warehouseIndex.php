<!DOCTYPE html>
<!-- saved from url=(0080)http://www.urbanui.com/celestial/template/demo/vertical-default-light/index.html -->
<html lang="en">


<head>
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


	
<meta charest="utf-8">
		<meta name="viewport" content="width=device.width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="main.css">

        

        <style type="text/css">
            body {
padding: 0;
margin: 0;
background: #f2f6e9;
}
/*--- navigation bar ---*/
.navbar {
background:#6ab446;
}
.nav-link,
.navbar-brand {
color: #fff;
cursor: pointer;
}
.nav-link {
margin-right: 1em !important;
}
.nav-link:hover {
color: #000;
}
.navbar-collapse {
justify-content: flex-end;
}
.header {
background-image: url(https://elements-video-cover-images-0.imgix.net/files/8e06f28f-02c2-4229-a752-84becd6d4941/inline_image_preview.jpg?auto=compress%2Cformat&fit=min&h=394&w=700&s=cb2b59919bfda75a8ce21dc8783a0154);
background-size: cover;
background-position: center;
position: relative;
background-color:#f46e17;
}
.overlay {
position: absolute;
min-height: 100%;
min-width: 100%;
left: 0;
top: 0;
background: rgba(0, 0, 0, 0.5);
}
.description {
left: 50%;
position: absolute;
top: 45%;
transform: translate(-50%, -55%);
text-align: center;

}
.description h1 {
color: #f46e17;
}
.description p {
color: #fff;
font-size: 1.3rem;
line-height: 1.5;
}
.description button {
 border:1px solid #6ab446;
 background:#6ab446;
 border-radius: 0;

 color:#fff;
}
.description button:hover {
 border:1px solid #fff;
 background:#fff;
 color:#000;
}
.features {
 margin: 4em auto;
 padding: 1em;
 position: relative;
}
.feature-title {
 color: #333;
 font-size: 1.3rem;
 font-weight: 700;
 margin-bottom: 20px;
 text-transform: uppercase;
}
.features img {
 -webkit-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
 -moz-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
 box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
 margin-bottom: 16px;
}
.features .form-control,
.features input {
 border-radius: 0;
}

.features .btn {
 background-color: #589b37;
 border: 1px solid #589b37;
 color: #fff;
 margin-top: 20px;
}
.features .btn:hover {
 background-color: #333;
 border: 1px solid #333;
}

@media (max-width: 575.98px) {
 .description {
 left: 0;
 padding: 0 15px;
 position: absolute;
 top: 10%;
 transform: none;
 text-align: center;
 }
 .description h1 {
 font-size: 2em;
 }

 .description p {
 font-size: 1.2rem;
 }
 .features {
 margin: 0;
 }
}

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
.carousel-inner img {
      width: 100%;
      height: 5%;
  }

 .page-footer {
 background-color: #222;
 color: #ccc;
 padding: 60px 0 30px;
}
.footer-copyright {
 color: #666;
 padding: 40px 0;
}
.container-fluid {
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
        <header class="page-header header container-fluid">
                          <div class="overlay"></div>
                          <div class="description">
                            <h1>Welcome to Royal Vintage Warehouse</h1>
                          </div>
            </header>
       
       

        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <script src="main.js"></script>
          <script>
                          $(document).ready(function(){
                          $('.header').height($(window).height());
                          })


                          var acc = document.getElementsByClassName("accordion");
                    var i;

                    for (i = 0; i < acc.length; i++) {
                      acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                          panel.style.display = "none";
                        } else {
                          panel.style.display = "block";
                        }
                      });
                    }

     </script>
   



           

          
                      <script>
                          var acc = document.getElementsByClassName("accordion");
                          var i;

                          for (i = 0; i < acc.length; i++) {
                            acc[i].addEventListener("click", function() {
                              this.classList.toggle("active");
                              var panel = this.nextElementSibling;
                              if (panel.style.display === "block") {
                                panel.style.display = "none";
                              } else {
                                panel.style.display = "block";
                              }
                            });
                          }
                      </script>

	
        </div>
   
    <script src="./CelestialUI Admin1_files/vendor.bundle.base.js.download"></script>
    <script src="./CelestialUI Admin1_files/off-canvas.js.download"></script>
    <script src="./CelestialUI Admin1_files/hoverable-collapse.js.download"></script>
    <script src="./CelestialUI Admin1_files/template.js.download"></script>
    <script src="./CelestialUI Admin1_files/settings.js.download"></script>
    <script src="./CelestialUI Admin1_files/todolist.js.download"></script>
    <script src="./CelestialUI Admin1_files/progressbar.min.js.download"></script>
    <script src="./CelestialUI Admin1_files/Chart.min.js.download"></script>
    <script src="./CelestialUI Admin1_files/jquery.flot.js.download"></script>
    <script src="./CelestialUI Admin1_files/curvedLines.js.download"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./CelestialUI Admin1_files/dashboard.js.download"></script>
    <!-- End custom js for this page-->
  
</body>
</html>